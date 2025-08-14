<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Taldarpopup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    View::composer('*', function ($view) {
        $taldarpopup = Taldarpopup::where('is_active', 1)->first();
        $view->with('taldarpopup', $taldarpopup);
    });
    }
}
