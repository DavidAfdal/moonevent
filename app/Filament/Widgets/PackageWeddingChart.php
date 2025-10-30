<?php

namespace App\Filament\Widgets;

use App\Models\PackageBooking;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PackageWeddingChart extends ChartWidget
{
    protected ?string $heading = 'Wedding Package Booking Statistics';
     protected ?int $height = 300;
    protected string|int|array $columnSpan = 6;

    public ?string $filter = 'year';

protected function getData(): array
    {
        $filter = $this->filter ?? 'month'; // default ke month

        $query = PackageBooking::select(
                'package_tours.name as bar_name',
                DB::raw('COUNT(package_bookings.id) as total_bookings')
            )
            ->join('package_tours', 'package_bookings.package_tour_id', '=', 'package_tours.id')
            ->where('package_bookings.status', '=', 'success');

        // Filter berdasarkan waktu
        $query->when($filter === 'today', function ($q) {
            $q->whereDate('package_bookings.created_at', Carbon::today());
        })
        ->when($filter === 'week', function ($q) {
            $q->whereBetween('package_bookings.created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        })
        ->when($filter === 'month', function ($q) {
            $q->whereMonth('package_bookings.created_at', Carbon::now()->month)
              ->whereYear('package_bookings.created_at', Carbon::now()->year);
        })
        ->when($filter === 'year', function ($q) {
            $q->whereYear('package_bookings.created_at', Carbon::now()->year);
        });

        $booking_bar = $query
            ->groupBy('package_tours.name')
            ->orderBy('total_bookings', 'desc')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Bookings',
                    'data' => $booking_bar->pluck('total_bookings'),
                    'backgroundColor' => [
                        '#3B82F6',
                        '#10B981',
                        '#F59E0B',
                        '#EF4444',
                        '#8B5CF6',
                    ],
                ],
            ],
            'labels' => $booking_bar->pluck('bar_name'),
        ];
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'This Week',
            'month' => 'This Month',
            'year' => 'This Year',
        ];
    }
protected function getType(): string
{
    return 'bar';
}
}
