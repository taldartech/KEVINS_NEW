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
            $activePopup = Taldarpopup::where('is_active', 1)->first();
            $latestRooms = \App\Models\Room::orderByDesc('id')->get();
            $view->with([
                'activePopup' => $activePopup,
                'rooms' => $latestRooms,
            ]);
    
        });
    }
}
