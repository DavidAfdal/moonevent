<?php

namespace App\Filament\Widgets;

use App\Models\PackageBooking;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BookingChart extends ChartWidget
{
    protected ?string $heading = 'Booking Chart';
    protected ?int $maxheight = 800;
    protected string|int|array $columnSpan = 6;
    
       // 🎚️ Dropdown filter di kanan atas chart
    protected function getFilters(): ?array
    {
        return [
            'week' => 'Last Week',
            'month' => 'Last Month',
            'year' => 'This Year',
        ];
    }

   public ?string $filter = 'year'; // default filter saat pertama dibuka

    protected function getData(): array
    {
        // 🎯 Tentukan rentang tanggal berdasarkan filter yang dipilih
        $filter = $this->filter ?? 'year';

        $startDate = match ($filter) {
            'week' => now()->subDays(7)->startOfDay(),
            'month' => now()->subMonth()->startOfDay(),
            'year' => now()->startOfYear(),
            default => now()->startOfYear(),
        };

        $endDate = now();

        if (in_array($filter, ['today', 'week', 'month'])) {
            // Per hari
            $bookings = PackageBooking::select(
                    DB::raw('DATE(booking_date) as day'),
                    DB::raw('SUM(total_amount) as total_amount')
                )
                ->where('status', '=', 'success')
                ->whereBetween('booking_date', [$startDate, $endDate])
                ->groupBy('day')
                ->orderBy('day')
                ->get();

            $labels = $bookings->pluck('day')->map(fn($d) => Carbon::parse($d)->format('d M'));
        } else {
            $bookings = PackageBooking::select(
                    DB::raw('MONTH(booking_date) as month_number'),
                    DB::raw('MONTHNAME(booking_date) as month'),
                    DB::raw('SUM(total_amount) as total_amount')
                )
                ->where('status', '=', 'success')
                ->whereBetween('booking_date', [$startDate, $endDate])
                ->groupBy('month_number', 'month')
                ->orderBy('month_number')
                ->get();

            $labels = $bookings->pluck('month');
        }

    
        return [
            'datasets' => [
                [
                    'label' => 'Total Booking (Rp)',
                    'data' => $bookings->pluck('total_amount'),
                    'borderColor' => '#F59E0B',
                    'backgroundColor' => 'rgba(245, 158, 11, 0.3)',
                    'fill' => true,
                    'tension' => 0.3,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

}
