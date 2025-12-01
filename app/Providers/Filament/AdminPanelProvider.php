<?php

namespace App\Providers\Filament;

use App\Filament\Pages\CustomDashboard;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use App\Filament\Widgets\BookingChart;
use App\Filament\Widgets\CalendarEventWidget;
use App\Filament\Widgets\PackageWeddingChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandName("Moonevent Admin Panel")
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
               
            ])
            ->navigationGroups([])
            ->widgets([
                StatsOverview::class,
                BookingChart::class,
                PackageWeddingChart::class,
                CalendarEventWidget::class
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->renderHook(PanelsRenderHook::BODY_END, fn() => <<<HTML
                <script>
                    if(localStorage.getItem('collapsedGroups') === 'null') {
                        localStorage.setItem('collapsedGroups', JSON.stringify([]));
                    }
                </script>
            HTML)
            ->authGuard('web')            // pakai guard 'web' (atau 'filament' kalau kamu sudah buat)
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
