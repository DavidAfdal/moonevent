<?php

namespace App\Providers;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate; // Corrected namespace
use Illuminate\Support\Facades\URL;

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
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
        FilamentAsset::register([
            Js::make('fullcalendar-js', 'https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'),           
        ],);
     }
}