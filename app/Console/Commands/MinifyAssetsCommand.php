<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class MinifyAssetsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assets:minify 
                            {--css : Minify CSS files}
                            {--js : Minify JavaScript files}
                            {--all : Minify both CSS and JavaScript files}
                            {--dry-run : Only show what would be minified without making changes}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Minify CSS and JavaScript assets';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting asset minification...');
        
        $dryRun = $this->option('dry-run');
        if ($dryRun) {
            $this->warn('Running in dry-run mode. No files will be modified.');
        }
        
        $minifyCSS = $this->option('css') || $this->option('all');
        $minifyJS = $this->option('js') || $this->option('all');
        
        if (!$minifyCSS && !$minifyJS) {
            $this->error('Please specify what to minify: --css, --js, or --all');
            return 1;
        }
        
        // Check if required tools are installed
        if (!$this->checkRequiredTools()) {
            return 1;
        }
        
        if ($minifyCSS) {
            $this->minifyCSSFiles($dryRun);
        }
        
        if ($minifyJS) {
            $this->minifyJSFiles($dryRun);
        }
        
        $this->info('Asset minification completed!');
        return 0;
    }
    
    /**
     * Check if required tools are installed
     */
    protected function checkRequiredTools()
    {
        $tools = [
            'npx' => 'NPX (Node Package Executor)',
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
            $this->error('Required tools are missing:');
            
            foreach ($missing as $tool) {
                $this->line(' - ' . $tool . ' (' . $tools[$tool] . ')');
            }
            
            $this->info('Please install Node.js and npm:');
            $this->line('brew install node');
            
            return false;
        }
        
        // Check if required npm packages are installed
        $this->info('Installing required npm packages...');
        
        $packages = [
            'clean-css-cli' => 'CSS minifier',
            'terser' => 'JavaScript minifier'
        ];
        
        foreach ($packages as $package => $description) {
            $this->line(' - Installing ' . $package . ' (' . $description . ')');
            
            $process = new Process(['npm', 'install', '--no-save', $package]);
            $process->run();
            
            if (!$process->isSuccessful()) {
                $this->error('Failed to install ' . $package . ':');
                $this->line($process->getErrorOutput());
                return false;
            }
        }
        
        return true;
    }
    
    /**
     * Minify CSS files
     */
    protected function minifyCSSFiles($dryRun)
    {
        $this->info('Minifying CSS files...');
        
        $cssFiles = array_merge(
            File::glob(public_path('assets/css/*.css')),
            File::glob(resource_path('css/*.css'))
        );
        
        // Filter out already minified files
        $cssFiles = array_filter($cssFiles, function($file) {
            return !str_contains($file, '.min.css');
        });
        
        $this->info('Found ' . count($cssFiles) . ' CSS files to minify.');
        
        $bar = $this->output->createProgressBar(count($cssFiles));
        $bar->start();
        
        $totalSaved = 0;
        $minifiedCount = 0;
        
        foreach ($cssFiles as $file) {
            $originalSize = filesize($file);
            $minFilePath = $this->getMinifiedPath($file);
            
            if (!$dryRun) {
                $process = new Process([
                    'npx', 
                    'cleancss', 
                    '-o', 
                    $minFilePath, 
                    $file
                ]);
                
                try {
                    $process->run();
                    
                    if (!$process->isSuccessful()) {
                        $this->error('Failed to minify ' . $file . ':');
                        $this->line($process->getErrorOutput());
                        continue;
                    }
                    
                    $newSize = filesize($minFilePath);
                    $saved = $originalSize - $newSize;
                    $totalSaved += $saved;
                    $minifiedCount++;
                    
                    $relativePath = str_replace(base_path() . '/', '', $file);
                    $relativeMinPath = str_replace(base_path() . '/', '', $minFilePath);
                    $this->line(' - Minified: ' . $relativePath . ' → ' . $relativeMinPath . ' (Saved: ' . $this->formatBytes($saved) . ')');
                } catch (\Exception $e) {
                    $this->error('Error minifying ' . $file . ': ' . $e->getMessage());
                }
            } else {
                $relativePath = str_replace(base_path() . '/', '', $file);
                $relativeMinPath = str_replace(base_path() . '/', '', $minFilePath);
                $this->line(' - Would minify: ' . $relativePath . ' → ' . $relativeMinPath);
                $minifiedCount++;
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if ($dryRun) {
            $this->info("Would minify $minifiedCount CSS files.");
        } else {
            $this->info("Minified $minifiedCount CSS files.");
            $this->info("Total space saved: " . $this->formatBytes($totalSaved));
        }
    }
    
    /**
     * Minify JavaScript files
     */
    protected function minifyJSFiles($dryRun)
    {
        $this->info('Minifying JavaScript files...');
        
        $jsFiles = array_merge(
            File::glob(public_path('assets/js/*.js')),
            File::glob(resource_path('js/*.js'))
        );
        
        // Filter out already minified files
        $jsFiles = array_filter($jsFiles, function($file) {
            return !str_contains($file, '.min.js');
        });
        
        $this->info('Found ' . count($jsFiles) . ' JavaScript files to minify.');
        
        $bar = $this->output->createProgressBar(count($jsFiles));
        $bar->start();
        
        $totalSaved = 0;
        $minifiedCount = 0;
        
        foreach ($jsFiles as $file) {
            $originalSize = filesize($file);
            $minFilePath = $this->getMinifiedPath($file);
            
            if (!$dryRun) {
                $process = new Process([
                    'npx', 
                    'terser', 
                    $file,
                    '--compress',
                    '--mangle',
                    '--output',
                    $minFilePath
                ]);
                
                try {
                    $process->run();
                    
                    if (!$process->isSuccessful()) {
                        $this->error('Failed to minify ' . $file . ':');
                        $this->line($process->getErrorOutput());
                        continue;
                    }
                    
                    $newSize = filesize($minFilePath);
                    $saved = $originalSize - $newSize;
                    $totalSaved += $saved;
                    $minifiedCount++;
                    
                    $relativePath = str_replace(base_path() . '/', '', $file);
                    $relativeMinPath = str_replace(base_path() . '/', '', $minFilePath);
                    $this->line(' - Minified: ' . $relativePath . ' → ' . $relativeMinPath . ' (Saved: ' . $this->formatBytes($saved) . ')');
                } catch (\Exception $e) {
                    $this->error('Error minifying ' . $file . ': ' . $e->getMessage());
                }
            } else {
                $relativePath = str_replace(base_path() . '/', '', $file);
                $relativeMinPath = str_replace(base_path() . '/', '', $minFilePath);
                $this->line(' - Would minify: ' . $relativePath . ' → ' . $relativeMinPath);
                $minifiedCount++;
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if ($dryRun) {
            $this->info("Would minify $minifiedCount JavaScript files.");
        } else {
            $this->info("Minified $minifiedCount JavaScript files.");
            $this->info("Total space saved: " . $this->formatBytes($totalSaved));
        }
    }
    
    /**
     * Get the minified file path
     */
    protected function getMinifiedPath($file)
    {
        $pathInfo = pathinfo($file);
        return $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.min.' . $pathInfo['extension'];
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
