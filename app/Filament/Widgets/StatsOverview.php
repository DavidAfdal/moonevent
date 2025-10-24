<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\PackageTour;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Categories', Category::count())
                ->description('Jumlah kategori terdaftar')
                ->descriptionIcon('heroicon-o-rectangle-stack')
                ->color('success'),

            Stat::make('Total Packages', PackageTour::count())
                ->description('Jumlah paket booking')
                ->descriptionIcon('heroicon-o-briefcase')
                ->color('warning'),

            Stat::make('Total Users', User::count())
                ->description('Jumlah pengguna sistem')
                ->descriptionIcon('heroicon-o-users')
                ->color('info'),
        ];
    }
}
