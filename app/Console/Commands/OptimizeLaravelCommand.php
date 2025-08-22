<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class OptimizeLaravelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:optimize 
                            {--production : Run optimizations suitable for production environment}
                            {--clear : Clear all caches before optimizing}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run all Laravel optimization commands in the correct order';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting Laravel optimization...');
        
        $isProduction = $this->option('production');
        $clearCaches = $this->option('clear');
        
        if ($clearCaches) {
            $this->clearAllCaches();
        }
        
        $this->optimizeLaravel($isProduction);
        
        $this->info('Laravel optimization completed!');
        return 0;
    }
    
    /**
     * Clear all Laravel caches
     */
    protected function clearAllCaches()
    {
        $this->info('Clearing all caches...');
        
        $this->executeArtisanCommand('cache:clear', 'Application cache cleared');
        $this->executeArtisanCommand('config:clear', 'Configuration cache cleared');
        $this->executeArtisanCommand('route:clear', 'Route cache cleared');
        $this->executeArtisanCommand('view:clear', 'View cache cleared');
        $this->executeArtisanCommand('event:clear', 'Event cache cleared');
        $this->executeArtisanCommand('optimize:clear', 'Compiled services and packages files removed');
        
        $this->info('All caches cleared successfully.');
    }
    
    /**
     * Optimize Laravel for better performance
     */
    protected function optimizeLaravel($isProduction)
    {
        $this->info('Optimizing Laravel...');
        
        // Basic optimizations
        $this->executeArtisanCommand('optimize', 'Optimizing compiled class loader');
        $this->executeArtisanCommand('config:cache', 'Configuration cached successfully');
        $this->executeArtisanCommand('route:cache', 'Routes cached successfully');
        
        // Only cache views in production to make development easier
        if ($isProduction) {
            $this->executeArtisanCommand('view:cache', 'Blade templates cached successfully');
            $this->info('Running production optimizations...');
            
            // Additional production optimizations
            $this->executeArtisanCommand('event:cache', 'Events cached successfully');
            
            $this->info('Production optimizations completed.');
        }
        
        $this->info('Laravel optimization completed successfully.');
    }
    
    /**
     * Execute an Artisan command and output its message
     */
    protected function executeArtisanCommand($command, $successMessage)
    {
        $this->line(" - Running: <comment>$command</comment>");
        
        try {
            Artisan::call($command);
            $this->line("   <info>✓</info> $successMessage");
        } catch (\Exception $e) {
            $this->error("   <error>✗</error> Failed: " . $e->getMessage());
        }
    }
}
