<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class OptimizeImagesInBladeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blade:optimize-images 
                            {--dry-run : Only show changes without modifying files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add lazy loading to images in Blade templates';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Optimizing images in Blade templates...');
        
        $viewsPath = resource_path('views');
        $bladeFiles = File::glob($viewsPath . '/**/*.blade.php');
        
        $this->info('Found ' . count($bladeFiles) . ' Blade files.');
        
        $dryRun = $this->option('dry-run');
        if ($dryRun) {
            $this->warn('Running in dry-run mode. No files will be modified.');
        }
        
        $modifiedCount = 0;
        $bar = $this->output->createProgressBar(count($bladeFiles));
        $bar->start();
        
        foreach ($bladeFiles as $file) {
            $content = file_get_contents($file);
            $originalContent = $content;
            
            // Add loading="lazy" to img tags that don't already have it
            $content = preg_replace_callback('/<img\s(?![^>]*loading=)[^>]*>/i', function($matches) {
                $tag = $matches[0];
                // Don't modify if it's already a data-src attribute (for our custom lazy loading)
                if (strpos($tag, 'data-src') !== false) {
                    return $tag;
                }
                
                // Insert loading="lazy" before the closing >
                return substr_replace($tag, ' loading="lazy"', -1, 0);
            }, $content);
            
            // Convert some images to use data-src for custom lazy loading
            // Focus on images that are likely below the fold
            $content = preg_replace_callback('/<img\s[^>]*src=(["\'])((?!data:)[^"\']+)\1[^>]*>/i', function($matches) {
                $tag = $matches[0];
                $quote = $matches[1];
                $src = $matches[2];
                
                // Skip already processed tags or small icons
                if (strpos($tag, 'data-src') !== false || 
                    strpos($tag, 'icon') !== false || 
                    strpos($tag, 'logo') !== false) {
                    return $tag;
                }
                
                // Replace src with data-src and add a placeholder
                $newTag = str_replace("src=$quote$src$quote", "src=$quote/assets/img/placeholder.png$quote data-src=$quote$src$quote", $tag);
                return $newTag;
            }, $content);
            
            if ($content !== $originalContent) {
                $modifiedCount++;
                
                if (!$dryRun) {
                    file_put_contents($file, $content);
                }
                
                $relativePath = str_replace(base_path() . '/', '', $file);
                $this->line(' - Modified: ' . $relativePath);
            }
            
            $bar->advance();
        }
        
        $bar->finish();
        $this->newLine(2);
        
        if ($dryRun) {
            $this->info("Would modify $modifiedCount files. Run without --dry-run to apply changes.");
        } else {
            $this->info("Modified $modifiedCount files.");
        }
        
        // Create placeholder image if it doesn't exist
        $placeholderPath = public_path('assets/img/placeholder.png');
        if (!File::exists($placeholderPath)) {
            $this->info('Creating placeholder image...');
            $this->createPlaceholderImage($placeholderPath);
        }
        
        return 0;
    }
    
    /**
     * Create a simple placeholder image
     */
    protected function createPlaceholderImage($path)
    {
        // Create directory if it doesn't exist
        $directory = dirname($path);
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        
        // Create a 1x1 transparent PNG
        $image = imagecreatetruecolor(1, 1);
        imagesavealpha($image, true);
        $transparent = imagecolorallocatealpha($image, 0, 0, 0, 127);
        imagefill($image, 0, 0, $transparent);
        imagepng($image, $path);
        imagedestroy($image);
        
        $this->info('Created placeholder image at: ' . $path);
    }
}
