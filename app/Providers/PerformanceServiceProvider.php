<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class PerformanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Force HTTPS in production
        if (App::environment('production')) {
            URL::forceScheme('https');
        }

        // Set optimal cache configuration in production
        if (App::environment('production') && !App::runningInConsole()) {
            // Use file cache driver for better performance if Redis is not available
            if (Config::get('cache.default') === 'file') {
                Config::set('cache.stores.file.serialize', false);
            }
            
            // Enable route caching
            $this->app['router']->middleware('cache.response', \Illuminate\Http\Middleware\ResponseCache::class);
            
            // Set view cache time
            Config::set('view.expires', now()->addMinutes(60));
        }
    }
}
