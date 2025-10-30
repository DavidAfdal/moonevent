<?php

namespace App\Filament\Widgets;

use App\Models\PackageBooking;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PackageWeddingChart extends ChartWidget
{
    protected ?string $heading = 'Package Wedding Chart';
     protected ?int $height = 300;
    protected string|int|array $columnSpan = 4;

    protected function getData(): array
    {
          $booking_pie = PackageBooking::select(
                'categories.name as category_name',
                DB::raw('SUM(package_bookings.total_amount) as total_amount')
            )
            ->join('package_tours', 'package_bookings.package_tour_id', '=', 'package_tours.id')
            ->join('categories', 'package_tours.category_id', '=', 'categories.id')
            ->where('package_bookings.status', '=', 'success')
            ->groupBy('categories.name')
            ->orderBy('total_amount', 'desc')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Total Booking (Rp)',
                    'data' => $booking_pie->pluck('total_amount'), // values
                    'backgroundColor' => [
                        '#F59E0B', // amber
                        '#3B82F6', // blue
                        '#10B981', // green
                        '#EF4444', // red
                        '#8B5CF6', // purple
                    ],
                ],
            ],
            'labels' => $booking_pie->pluck('category_name'), // labels
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
