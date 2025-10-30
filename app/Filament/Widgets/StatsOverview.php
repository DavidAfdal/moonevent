<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\PackageBooking;
use App\Models\PackageTour;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;

class StatsOverview extends StatsOverviewWidget
{

    protected function getStats(): array
{
    // Ambil bulan & tahun sekarang
    $currentMonth = Carbon::now()->month;
    $currentYear = Carbon::now()->year;

    // Hitung total booking sukses bulan ini
    $totalBookings = PackageBooking::where('status', 'success')
        ->whereMonth('booking_date', $currentMonth)
        ->whereYear('booking_date', $currentYear)
        ->count();

    // Hitung total pendapatan bulan ini
    $totalRevenue = PackageBooking::where('status', 'success')
        ->whereMonth('booking_date', $currentMonth)
        ->whereYear('booking_date', $currentYear)
        ->sum('total_amount');

    return [
        
        Stat::make('Total Revenue (This Month)', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
            ->description('Total revenue this month')
            ->descriptionIcon('heroicon-o-banknotes')
            ->chart([7, 2, 10, 3, 15, 4, 17]) // opsional
            ->color('success'),

        Stat::make('Total Bookings (This Month)', $totalBookings)
            ->description('This month’s total bookings')
            ->descriptionIcon('heroicon-o-calendar-days')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('warning'),

        Stat::make('Total Users', User::count())
            ->description('Total registered users')
            ->descriptionIcon('heroicon-o-users')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('info'),
    ];
}
    // protected function getStats(): array
    // {
    //     return [
    //         Stat::make('Total Categories', Category::count())
    //             ->description('Jumlah kategori terdaftar')
    //             ->descriptionIcon('heroicon-o-rectangle-stack')
    //             ->chart([7, 2, 10, 3, 15, 4, 17])
    //             ->color('success'),

    //         Stat::make('Total Packages', PackageTour::count())
    //             ->description('Jumlah paket booking')
    //             ->descriptionIcon('heroicon-o-briefcase')
    //             ->chart([7, 2, 10, 3, 15, 4, 17])
    //             ->color('warning'),

    //         Stat::make('Total Users', User::count())
    //             ->description('Jumlah pengguna sistem')
    //             ->descriptionIcon('heroicon-o-users')
    //             ->chart([7, 2, 10, 3, 15, 4, 17])
    //             ->color('info'),
    //     ];
    // }
}
