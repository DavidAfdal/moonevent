@extends('front.layouts.app')
@section('content')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <a href="{{route('front.details', $package_tours->slug)}}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="text-center m-auto font-semibold">Booking</p>
    </nav>
    <div id="calendar" class="max-w-7xl mx-auto sm:px-6 lg:px-8" ></div>
    <a href="{{route('front.booking_request', $package_tours->slug)}}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>
    @php
    // Definisikan array events
    $events = [
        ['title' => 'Meeting', 'start' => '2024-11-13T10:00:00', 'end' => '2024-11-13T12:00:00'],
        ['title' => 'Lunch', 'start' => '2024-11-14T13:00:00', 'end' => '2024-11-14T14:00:00'],
        // Tambahkan acara lainnya sesuai kebutuhan
    ];
    @endphp

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
            });
            calendar.render();
        });
    </script>
    </section>
    
    @endsection
    @push('after-scripts')

    <script src="{{asset('js/details.js')}}"></script>
    @endpush