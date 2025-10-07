<?php

namespace App\Http\Controllers;

use App\Models\PackageBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $package_bookings = PackageBooking::with(['customer', 'tour'])->orderByDesc('id')->paginate(10);
        return view('admin.package_bookings.index', compact('package_bookings'));
    }

    /**
     * Get package bookings for the calendar.
     */public function get_package_bookings()
{
    // Base query: ambil booking dengan join ke package_tours dan users
    $bookingsQuery = PackageBooking::select(
        'package_bookings.booking_date',
        'package_bookings.booking_time',
        'package_tours.name as package_name',
        'users.name as user_name',
        'package_bookings.status'
    )
    ->join('package_tours', 'package_bookings.package_tour_id', '=', 'package_tours.id')
    ->join('users', 'package_bookings.user_id', '=', 'users.id');

    // Filter khusus jika user adalah customer
    if (auth()->user()->hasRole('customer')) {
        $bookingsQuery->where('package_bookings.user_id', auth()->id());
    }

    // Ambil semua data booking
    $bookings = $bookingsQuery->get();

    // Map ke format FullCalendar
    $events = $bookings
        ->filter(fn ($booking) => $booking->status !== 'declined') // Exclude declined bookings
        ->map(function ($booking) {
            return [
                'title' => "{$booking->package_name} - {$booking->user_name}",
                'start' => $booking->booking_date . 'T' . $booking->booking_time, // Format ISO datetime
            ];
        })
        ->values();

    // Data untuk Bar Chart (total pendapatan per bulan)
    $bookings_bar = PackageBooking::select(
        DB::raw('MONTHNAME(booking_date) as month'),
        DB::raw('SUM(total_amount) as total_amount')
    )
    ->where('status', '=', 'success')
    ->groupBy('month')
    ->orderBy(DB::raw('MONTH(booking_date)'))
    ->get();

    // Data untuk Pie Chart (total pendapatan per kategori)
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

    // Siapkan data untuk chart
    $labels_bar = $bookings_bar->pluck('month');
    $data_bar = $bookings_bar->pluck('total_amount');

    $labels_pie = $booking_pie->pluck('category_name');
    $data_pie = $booking_pie->pluck('total_amount');

    // Return ke view
    return view('dashboard', compact('events', 'labels_bar', 'data_bar', 'labels_pie', 'data_pie'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PackageBooking $packageBooking)
    {
        return view('admin.package_bookings.show', compact('packageBooking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PackageBooking $packageBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PackageBooking $packageBooking)
    {
        DB::transaction(function () use ($packageBooking) {
            $packageBooking->update([
                'status' => 'success',
            ]);
        });

        return view('admin.package_bookings.show', compact('packageBooking'));
    }

    /**
     * Mark a booking as declined.
     */
    public function declined(Request $request, PackageBooking $packageBooking)
    {
        $packageBooking->update(['status' => 'declined']);

        return view('admin.package_bookings.show', compact('packageBooking'))
            ->with('message', 'Order declined');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PackageBooking $packageBooking)
    {
        //
    }
}
