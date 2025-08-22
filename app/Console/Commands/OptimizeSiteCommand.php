<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class OptimizeSiteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:optimize 
                            {--check-unused : Only check for unused files without removing them}
                            {--clean : Remove unused files}
                            {--optimize-images : Optimize images to reduce file size}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize site by finding unused assets and optimizing images';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting site optimization...');

        if ($this->option('check-unused')) {
            $this->checkUnusedFiles();
        }

        if ($this->option('clean')) {
            $this->cleanUnusedFiles();
        }

        if ($this->option('optimize-images')) {
            $this->optimizeImages();
        }

        $this->info('Site optimization completed!');
        return 0;
    }

    /**
     * Check for unused files in the assets directory
     */
    protected function checkUnusedFiles()
    {
        $this->info('Checking for unused files...');
        
        // Get all image files
        $assetImages = $this->getAllAssetImages();
        $this->info('Found ' . count($assetImages) . ' image files in assets directory.');
        
        // Get all view files to search for references
        $viewFiles = $this->getAllViewFiles();
        $this->info('Searching for references in ' . count($viewFiles) . ' view files.');
        
        $unusedFiles = [];
        $usedFiles = [];
        
        $bar = $this->output->createProgressBar(count($assetImages));
        $bar->start();
        
        foreach ($assetImages as $image) {
            $filename = basename($image);
            $isUsed = false;
            
            foreach ($viewFiles as $viewFile) {
                $content = file_get_contents($viewFile);
                if (strpos($content, $filename) !== false) {
                    $isUsed = true;
                    break;
                }
            }
            
            if (!$isUsed) {
                $unusedFiles[] = $image;
            } else {
                $usedFiles[] = $image;
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        $this->info('Found ' . count($unusedFiles) . ' potentially unused files:');
        foreach ($unusedFiles as $file) {
            $this->line(' - ' . $file);
        }
        
        $this->info('Found ' . count($usedFiles) . ' used files.');
    }
    
    /**
     * Clean unused files from the assets directory
     */
    protected function cleanUnusedFiles()
    {
        $this->info('Cleaning unused files...');
        
        // Get all image files
        $assetImages = $this->getAllAssetImages();
        
        // Get all view files to search for references
        $viewFiles = $this->getAllViewFiles();
        
        $unusedFiles = [];
        
        $bar = $this->output->createProgressBar(count($assetImages));
        $bar->start();
        
        foreach ($assetImages as $image) {
            $filename = basename($image);
            $isUsed = false;
            
            foreach ($viewFiles as $viewFile) {
                $content = file_get_contents($viewFile);
                if (strpos($content, $filename) !== false) {
                    $isUsed = true;
                    break;
                }
            }
            
            if (!$isUsed) {
                $unusedFiles[] = $image;
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if (count($unusedFiles) > 0) {
            $this->info('Found ' . count($unusedFiles) . ' unused files.');
            
            if ($this->confirm('Do you want to move these files to a backup directory instead of deleting them?', true)) {
                $backupDir = storage_path('app/unused_assets_backup_' . date('Y_m_d_His'));
                
                if (!File::exists($backupDir)) {
                    File::makeDirectory($backupDir, 0755, true);
                }
                
                foreach ($unusedFiles as $file) {
                    $relativePath = str_replace(base_path(), '', $file);
                    $backupPath = $backupDir . $relativePath;
                    $backupPathDir = dirname($backupPath);
                    
                    if (!File::exists($backupPathDir)) {
                        File::makeDirectory($backupPathDir, 0755, true);
                    }
                    
                    File::copy($file, $backupPath);
                    File::delete($file);
                    $this->line(' - Moved: ' . $file);
                }
                
                $this->info('All unused files have been moved to: ' . $backupDir);
            } else {
                if ($this->confirm('Are you sure you want to delete these files?', false)) {
                    foreach ($unusedFiles as $file) {
                        File::delete($file);
                        $this->line(' - Deleted: ' . $file);
                    }
                    
                    $this->info('All unused files have been deleted.');
                } else {
                    $this->info('No files were deleted.');
                }
            }
        } else {
            $this->info('No unused files found.');
        }
    }
    
    /**
     * Optimize images to reduce file size
     */
    protected function optimizeImages()
    {
        $this->info('Optimizing images...');
        
        // Check if required tools are installed
        if (!$this->checkOptimizationTools()) {
            return;
        }
        
        // Get all image files
        $assetImages = $this->getAllAssetImages();
        
        $this->info('Found ' . count($assetImages) . ' image files to optimize.');
        
        $bar = $this->output->createProgressBar(count($assetImages));
        $bar->start();
        
        $optimizedCount = 0;
        $totalSaved = 0;
        
        foreach ($assetImages as $image) {
            $extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            $originalSize = filesize($image);
            
            try {
                if (in_array($extension, ['jpg', 'jpeg'])) {
                    $this->optimizeJpeg($image);
                } elseif ($extension === 'png') {
                    $this->optimizePng($image);
                } elseif ($extension === 'gif') {
                    $this->optimizeGif($image);
                } elseif ($extension === 'svg') {
                    $this->optimizeSvg($image);
                }
                
                $newSize = filesize($image);
                $saved = $originalSize - $newSize;
                
                if ($saved > 0) {
                    $optimizedCount++;
                    $totalSaved += $saved;
                }
            } catch (\Exception $e) {
                $this->error('Failed to optimize ' . $image . ': ' . $e->getMessage());
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        $this->info('Optimized ' . $optimizedCount . ' images.');
        $this->info('Total space saved: ' . $this->formatBytes($totalSaved));
    }
    
    /**
     * Check if required optimization tools are installed
     */
    protected function checkOptimizationTools()
    {
        $tools = [
            'jpegoptim' => 'Optimize JPEG images',
            'optipng' => 'Optimize PNG images',
            'gifsicle' => 'Optimize GIF images',
            'svgo' => 'Optimize SVG images'
        ];
        
        $missing = [];
        
        foreach ($tools as $tool => $description) {
            $process = new Process(['which', $tool]);
            $process->run();
            
            if (!$process->isSuccessful()) {
                $missing[] = $tool;
            }
        }
        
        if (count($missing) > 0) {
            $this->warn('Some optimization tools are missing:');
            
            foreach ($missing as $tool) {
                $this->line(' - ' . $tool . ' (' . $tools[$tool] . ')');
            }
            
            $this->info('You can install these tools with:');
            $this->line('brew install ' . implode(' ', $missing));
            $this->line('or');
            $this->line('npm install -g svgo (for svgo)');
            
            return false;
        }
        
        return true;
    }
    
    /**
     * Optimize JPEG image
     */
    protected function optimizeJpeg($file)
    {
        $process = new Process(['jpegoptim', '--strip-all', '--max=85', $file]);
        $process->run();
        
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
    
    /**
     * Optimize PNG image
     */
    protected function optimizePng($file)
    {
        $process = new Process(['optipng', '-o5', $file]);
        $process->run();
        
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
    
    /**
     * Optimize GIF image
     */
    protected function optimizeGif($file)
    {
        $process = new Process(['gifsicle', '-O3', '-o', $file, $file]);
        $process->run();
        
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
    
    /**
     * Optimize SVG image
     */
    protected function optimizeSvg($file)
    {
        $process = new Process(['svgo', $file]);
        $process->run();
        
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
    }
    
    /**
     * Get all image files in the assets directory
     */
    protected function getAllAssetImages()
    {
        $extensions = ['jpg', 'jpeg', 'png', 'gif', 'svg'];
        $assetImages = [];
        
        foreach ($extensions as $ext) {
            $assetImages = array_merge(
                $assetImages,
                File::glob(public_path('assets/img/**/*.' . $ext)),
                File::glob(resource_path('assets/img/**/*.' . $ext))
            );
        }
        
        return $assetImages;
    }
    
    /**
     * Get all view files
     */
    protected function getAllViewFiles()
    {
        return array_merge(
            File::glob(resource_path('views/**/*.blade.php')),
            File::glob(resource_path('views/**/*.php')),
            File::glob(public_path('**/*.html')),
            File::glob(public_path('**/*.js')),
            File::glob(public_path('**/*.css'))
        );
    }
    
    /**
     * Format bytes to human readable format
     */
    protected function formatBytes($bytes, $precision = 2)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        
        $bytes /= pow(1024, $pow);
        
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
