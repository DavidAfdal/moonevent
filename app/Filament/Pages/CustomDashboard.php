<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BookingChart;
use App\Filament\Widgets\CalendarEventWidget;
use App\Filament\Widgets\PackageWeddingChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class CustomDashboard extends BaseDashboard
{
    protected static string $routePath = '/';
    protected static string|BackedEnum|null $navigationIcon  = Heroicon::OutlinedHome;

    public function getColumns(): int | array
    {
        return 12;
    }

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            BookingChart::class,
            PackageWeddingChart::class,
            CalendarEventWidget::class
        ];
    }
}
