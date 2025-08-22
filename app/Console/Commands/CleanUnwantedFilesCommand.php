<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Finder\Finder;
use Carbon\Carbon;

class CleanUnwantedFilesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'files:clean 
                            {--check : Only check for unwanted files without deleting them}
                            {--backup : Backup files before deletion}
                            {--force : Force deletion without confirmation}
                            {--temp : Clean temporary files like .DS_Store, Thumbs.db, etc.}
                            {--duplicates : Find and clean duplicate files}
                            {--symlink : Create symbolic links for duplicate files instead of deleting them}
                            {--old=0 : Clean files older than specified days}
                            {--size=10 : Find files larger than specified MB}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Identify and clean unwanted files from the project';

    /**
     * File patterns that are considered temporary or unwanted
     */
    protected $tempPatterns = [
        '*.log',
        '*.log.*',
        '*.tmp',
        '*.temp',
        '*.cache',
        '*.bak',
        'Thumbs.db',
        '.DS_Store',
        '*.swp',
        '*.swo',
        '*.swn',
        '~*',
        '*~',
    ];

    /**
     * Directories to exclude from scanning
     */
    protected $excludeDirs = [
        'vendor',
        'node_modules',
        '.git',
        'storage/framework',
        'storage/logs',
        'bootstrap/cache',
    ];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting unwanted files cleanup...');
        
        $checkOnly = $this->option('check');
        $backup = $this->option('backup');
        $force = $this->option('force');
        $cleanTemp = $this->option('temp');
        $findDuplicates = $this->option('duplicates');
        $createSymlinks = $this->option('symlink');
        $oldDays = (int) $this->option('old');
        $minSizeMB = (int) $this->option('size');
        
        if ($cleanTemp) {
            $this->cleanTemporaryFiles($checkOnly, $backup, $force);
        }
        
        if ($findDuplicates) {
            $this->findDuplicateFiles($checkOnly, $backup, $force, $createSymlinks);
        }
        
        if ($oldDays > 0) {
            $this->cleanOldFiles($oldDays, $checkOnly, $backup, $force);
        }
        
        // Always check for large files
        $this->findLargeFiles($minSizeMB);
        
        $this->info('Unwanted files cleanup completed!');
        return 0;
    }
    
    /**
     * Clean temporary files based on patterns
     */
    protected function cleanTemporaryFiles($checkOnly, $backup, $force)
    {
        $this->info('Scanning for temporary files...');
        
        $finder = new Finder();
        $finder->files()
            ->ignoreVCS(true)
            ->ignoreDotFiles(false)
            ->followLinks(false)
            ->name($this->tempPatterns);
            
        foreach ($this->excludeDirs as $dir) {
            if (File::exists(base_path($dir))) {
                $finder->exclude($dir);
            }
        }
        
        // Exclude storage/framework symlinks
        if (File::exists(public_path('storage'))) {
            $finder->notPath('public/storage');
        }
        
        $finder->in(base_path());
        
        if (!$finder->hasResults()) {
            $this->info('No temporary files found.');
            return;
        }
        
        $totalSize = 0;
        $fileCount = 0;
        $filesToDelete = [];
        
        foreach ($finder as $file) {
            try {
                $filePath = $file->getRealPath();
                if (!$filePath || !file_exists($filePath) || is_link($filePath)) {
                    continue; // Skip invalid files and symlinks
                }
                
                $relativePath = $this->getRelativePath($filePath);
                $size = $file->getSize();
                $totalSize += $size;
                $fileCount++;
                
                $filesToDelete[] = [
                    'path' => $filePath,
                    'relative_path' => $relativePath,
                    'size' => $size,
                    'size_formatted' => $this->formatBytes($size)
                ];
                
                $this->line(" - <comment>{$relativePath}</comment> ({$this->formatBytes($size)})");
            } catch (\Exception $e) {
                $this->line(" - <error>Error processing file: {$file->getPathname()}</error>");
                continue;
            }
        }
        
        $this->info("Found {$fileCount} temporary files totaling {$this->formatBytes($totalSize)}");
        
        if ($checkOnly) {
            return;
        }
        
        if (!$force && !$this->confirm('Do you want to delete these temporary files?')) {
            return;
        }
        
        $backupPath = null;
        if ($backup) {
            $backupPath = $this->backupFiles($filesToDelete, 'temp_files');
        }
        
        foreach ($filesToDelete as $file) {
            try {
                File::delete($file['path']);
                $this->line(" - Deleted: <info>{$file['relative_path']}</info>");
            } catch (\Exception $e) {
                $this->error(" - Failed to delete: {$file['relative_path']} - {$e->getMessage()}");
            }
        }
        
        if ($backup && $backupPath) {
            $this->info("Files backed up to: {$backupPath}");
        }
    }
    
    /**
     * Find and clean duplicate files
     */
    protected function findDuplicateFiles($checkOnly, $backup, $force, $createSymlinks = false)
    {
        $this->info('Scanning for duplicate files...');
        
        $finder = new Finder();
        $finder->files()
            ->ignoreVCS(true)
            ->followLinks(false);
            
        foreach ($this->excludeDirs as $dir) {
            if (File::exists(base_path($dir))) {
                $finder->exclude($dir);
            }
        }
        
        // Exclude storage/framework symlinks
        if (File::exists(public_path('storage'))) {
            $finder->notPath('public/storage');
        }
        
        $finder->in(base_path());
        
        $hashes = [];
        $duplicates = [];
        $totalDuplicateSize = 0;
        
        $bar = $this->output->createProgressBar($finder->count());
        $bar->start();
        
        foreach ($finder as $file) {
            try {
                $filePath = $file->getRealPath();
                if (!$filePath || !file_exists($filePath) || is_link($filePath)) {
                    $bar->advance();
                    continue; // Skip invalid files and symlinks
                }
                
                $size = $file->getSize();
                
                // Skip very small files
                if ($size < 10) {
                    $bar->advance();
                    continue;
                }
            } catch (\Exception $e) {
                $bar->advance();
                continue;
            }
            
            // Use size and hash to identify duplicates
            $hash = md5_file($filePath);
            $key = $size . '_' . $hash;
            
            if (isset($hashes[$key])) {
                // This is a duplicate
                if (!isset($duplicates[$key])) {
                    // First time finding this duplicate, add the original file too
                    $duplicates[$key] = [
                        $hashes[$key]
                    ];
                    $totalDuplicateSize += $size;
                }
                
                $duplicates[$key][] = [
                    'path' => $filePath,
                    'relative_path' => $this->getRelativePath($filePath),
                    'size' => $size,
                    'size_formatted' => $this->formatBytes($size)
                ];
                
                $totalDuplicateSize += $size;
            } else {
                $hashes[$key] = [
                    'path' => $filePath,
                    'relative_path' => $this->getRelativePath($filePath),
                    'size' => $size,
                    'size_formatted' => $this->formatBytes($size)
                ];
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->line('');
        
        if (empty($duplicates)) {
            $this->info('No duplicate files found.');
            return;
        }
        
        $duplicateCount = 0;
        foreach ($duplicates as $files) {
            $duplicateCount += count($files) - 1;
        }
        
        $this->info("Found {$duplicateCount} duplicate files in " . count($duplicates) . " groups, totaling {$this->formatBytes($totalDuplicateSize)}");
        
        // Display duplicate groups
        $groupNumber = 1;
        foreach ($duplicates as $files) {
            $this->line("\n<comment>Duplicate Group #{$groupNumber}</comment> - {$files[0]['size_formatted']} each:");
            foreach ($files as $index => $file) {
                $prefix = $index === 0 ? 'Original' : 'Duplicate';
                $this->line(" - {$prefix}: {$file['relative_path']}");
            }
            $groupNumber++;
        }
        
        if ($checkOnly) {
            return;
        }
        
        if ($createSymlinks) {
            if (!$force && !$this->confirm('Do you want to replace duplicate files with symbolic links?')) {
                return;
            }
            
            $filesToProcess = [];
            foreach ($duplicates as $files) {
                // Skip the first file (original)
                for ($i = 1; $i < count($files); $i++) {
                    $filesToProcess[] = [
                        'original' => $files[0],
                        'duplicate' => $files[$i]
                    ];
                }
            }
            
            $backupPath = null;
            if ($backup) {
                // Extract just the duplicate files for backup
                $duplicateFiles = array_map(function($item) {
                    return $item['duplicate'];
                }, $filesToProcess);
                
                $backupPath = $this->backupFiles($duplicateFiles, 'duplicate_files');
            }
            
            $linkedCount = 0;
            $savedSize = 0;
            
            foreach ($filesToProcess as $item) {
                try {
                    $originalPath = $item['original']['path'];
                    $duplicatePath = $item['duplicate']['path'];
                    
                    if (File::exists($duplicatePath)) {
                        // Delete the duplicate file
                        File::delete($duplicatePath);
                        
                        // Create a symbolic link
                        // Calculate the relative path from the duplicate directory to the original file
                        $originalDir = dirname($originalPath);
                        $duplicateDir = dirname($duplicatePath);
                        $relPath = $this->getRelativePathBetween($originalPath, $duplicateDir);
                        
                        symlink($relPath, $duplicatePath);
                        
                        $this->line(" - Created symlink: <info>{$item['duplicate']['relative_path']}</info> → {$item['original']['relative_path']}");
                        
                        $linkedCount++;
                        $savedSize += $item['duplicate']['size'];
                    }
                } catch (\Exception $e) {
                    $this->error(" - Failed to create symlink: {$item['duplicate']['relative_path']} - {$e->getMessage()}");
                }
            }
            
            $this->info("Created {$linkedCount} symbolic links, saving {$this->formatBytes($savedSize)}");
        } else {
            if (!$force && !$this->confirm('Do you want to delete duplicate files (keeping the originals)?')) {
                return;
            }
            
            $filesToDelete = [];
            foreach ($duplicates as $files) {
                // Skip the first file (original)
                for ($i = 1; $i < count($files); $i++) {
                    $filesToDelete[] = $files[$i];
                }
            }
            
            $backupPath = null;
            if ($backup) {
                $backupPath = $this->backupFiles($filesToDelete, 'duplicate_files');
            }
            
            foreach ($filesToDelete as $file) {
                try {
                    File::delete($file['path']);
                    $this->line(" - Deleted duplicate: <info>{$file['relative_path']}</info>");
                } catch (\Exception $e) {
                    $this->error(" - Failed to delete: {$file['relative_path']} - {$e->getMessage()}");
                }
            }
        }
        
        if ($backup && $backupPath) {
            $this->info("Files backed up to: {$backupPath}");
        }
    }
    
    /**
     * Clean old backup and log files
     */
    protected function cleanOldFiles($days, $checkOnly, $backup, $force)
    {
        $this->info("Scanning for files older than {$days} days...");
        
        $cutoffDate = Carbon::now()->subDays($days);
        
        $finder = new Finder();
        $finder->files()
            ->ignoreVCS(true)
            ->followLinks(false)
            ->date("< {$cutoffDate->format('Y-m-d')}")
            ->name(['*.log', '*.bak', '*.old', '*.backup', '*.sql', '*.gz', '*.zip', '*.tar']);
            
        foreach ($this->excludeDirs as $dir) {
            if (File::exists(base_path($dir))) {
                $finder->exclude($dir);
            }
        }
        
        // Exclude storage/framework symlinks
        if (File::exists(public_path('storage'))) {
            $finder->notPath('public/storage');
        }
        
        // Add specific directories to search for old files
        $searchDirs = [
            'storage/logs',
            'storage/app/backups',
            'storage/app',
        ];
        
        $validDirs = [];
        foreach ($searchDirs as $dir) {
            if (File::exists(base_path($dir))) {
                $validDirs[] = base_path($dir);
            }
        }
        
        if (empty($validDirs)) {
            $this->info('No backup directories found to scan.');
            return;
        }
        
        $finder->in($validDirs);
        
        if (!$finder->hasResults()) {
            $this->info("No files older than {$days} days found.");
            return;
        }
        
        $totalSize = 0;
        $fileCount = 0;
        $filesToDelete = [];
        
        foreach ($finder as $file) {
            try {
                $filePath = $file->getRealPath();
                if (!$filePath || !file_exists($filePath) || is_link($filePath)) {
                    continue; // Skip invalid files and symlinks
                }
                
                $relativePath = $this->getRelativePath($filePath);
                $size = $file->getSize();
                $totalSize += $size;
                $fileCount++;
                $modifiedDate = Carbon::createFromTimestamp($file->getMTime())->format('Y-m-d');
                
                $filesToDelete[] = [
                    'path' => $filePath,
                    'relative_path' => $relativePath,
                    'size' => $size,
                    'size_formatted' => $this->formatBytes($size),
                    'modified' => $modifiedDate
                ];
                
                $this->line(" - <comment>{$relativePath}</comment> ({$this->formatBytes($size)}) - Last modified: {$modifiedDate}");
            } catch (\Exception $e) {
                $this->line(" - <error>Error processing file: {$file->getPathname()}</error>");
                continue;
            }
        }
        
        $this->info("Found {$fileCount} old files totaling {$this->formatBytes($totalSize)}");
        
        if ($checkOnly) {
            return;
        }
        
        if (!$force && !$this->confirm("Do you want to delete these files older than {$days} days?")) {
            return;
        }
        
        $backupPath = null;
        if ($backup) {
            $backupPath = $this->backupFiles($filesToDelete, 'old_files');
        }
        
        foreach ($filesToDelete as $file) {
            try {
                File::delete($file['path']);
                $this->line(" - Deleted: <info>{$file['relative_path']}</info>");
            } catch (\Exception $e) {
                $this->error(" - Failed to delete: {$file['relative_path']} - {$e->getMessage()}");
            }
        }
        
        if ($backup && $backupPath) {
            $this->info("Files backed up to: {$backupPath}");
        }
    }
    
    /**
     * Find large files that might be candidates for optimization or removal
     */
    protected function findLargeFiles($minSizeMB)
    {
        $this->info("Scanning for files larger than {$minSizeMB}MB...");
        
        $minSizeBytes = $minSizeMB * 1024 * 1024;
        
        $finder = new Finder();
        $finder->files()
            ->ignoreVCS(true)
            ->size(">= {$minSizeBytes}");
            
        foreach ($this->excludeDirs as $dir) {
            if (File::exists(base_path($dir))) {
                $finder->exclude($dir);
            }
        }
        
        // Exclude symlinks to avoid issues
        $finder->followLinks(false);
        
        // Exclude storage/framework symlinks
        if (File::exists(public_path('storage'))) {
            $finder->notPath('public/storage');
        }
        
        $finder->in(base_path());
        
        if (!$finder->hasResults()) {
            $this->info("No files larger than {$minSizeMB}MB found.");
            return;
        }
        
        $largeFiles = [];
        $totalSize = 0;
        
        foreach ($finder as $file) {
            try {
                $filePath = $file->getRealPath();
                if (!$filePath || !file_exists($filePath) || is_link($filePath)) {
                    continue; // Skip invalid files and symlinks
                }
                
                $relativePath = $this->getRelativePath($filePath);
                $size = $file->getSize();
                $totalSize += $size;
                
                $largeFiles[] = [
                    'path' => $relativePath,
                    'size' => $size,
                    'size_formatted' => $this->formatBytes($size)
                ];
            } catch (\Exception $e) {
                $this->line(" - <error>Error processing file: {$file->getPathname()}</error>");
                continue;
            }
        }
        
        // Sort by size, largest first
        usort($largeFiles, function($a, $b) {
            return $b['size'] - $a['size'];
        });
        
        $this->info("Found " . count($largeFiles) . " large files totaling {$this->formatBytes($totalSize)}:");
        
        $table = [];
        foreach ($largeFiles as $file) {
            $table[] = [$file['path'], $file['size_formatted']];
        }
        
        $this->table(['File Path', 'Size'], $table);
        
        $this->info("Consider optimizing or removing these large files to improve performance.");
    }
    
    /**
     * Backup files before deletion
     */
    protected function backupFiles($files, $type)
    {
        $timestamp = Carbon::now()->format('Y-m-d_His');
        $backupDir = storage_path("app/backups/cleanup_{$type}_{$timestamp}");
        
        if (!File::exists($backupDir)) {
            File::makeDirectory($backupDir, 0755, true);
        }
        
        foreach ($files as $file) {
            $relativePath = $file['relative_path'];
            $targetPath = $backupDir . '/' . $relativePath;
            
            // Create directory structure
            $targetDir = dirname($targetPath);
            if (!File::exists($targetDir)) {
                File::makeDirectory($targetDir, 0755, true);
            }
            
            // Copy file
            try {
                File::copy($file['path'], $targetPath);
            } catch (\Exception $e) {
                $this->error(" - Failed to backup: {$relativePath} - {$e->getMessage()}");
            }
        }
        
        return $backupDir;
    }
    
    /**
     * Get relative path from base path
     */
    protected function getRelativePath($path)
    {
        return str_replace(base_path() . '/', '', $path);
    }
    
    /**
     * Calculate relative path between two paths for symlink creation
     */
    protected function getRelativePathBetween($targetPath, $basePath)
    {
        // Convert paths to absolute paths
        $targetPath = realpath($targetPath);
        $basePath = realpath($basePath);
        
        if (!$targetPath || !$basePath) {
            throw new \Exception("Invalid path provided");
        }
        
        // Split paths into arrays
        $targetParts = explode('/', $targetPath);
        $baseParts = explode('/', $basePath);
        
        // Find common parts
        $i = 0;
        while ($i < count($targetParts) && $i < count($baseParts) && $targetParts[$i] === $baseParts[$i]) {
            $i++;
        }
        
        // Build relative path
        $relPath = str_repeat('../', count($baseParts) - $i);
        $relPath .= implode('/', array_slice($targetParts, $i));
        
        return $relPath;
    }
    
    /**
     * Format bytes to human-readable format
     */
    protected function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        
        $bytes /= (1 << (10 * $pow));
        
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
