<?php

namespace App\Providers;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // Corrected namespace

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
        Gate::before(function($user, $ability) {
            if ($user->hasRole('super_admin')) {
                return true;
            }
        });

        FilamentAsset::register([
            Js::make('fullcalendar-js', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'),
            Js::make('fullcalendar-js', ' https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.19/index.global.min.j'),
           
        ],);
     }
}