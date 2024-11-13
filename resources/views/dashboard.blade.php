<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div> --}}

        <div id="calendar" class="max-w-7xl mx-auto sm:px-6 lg:px-8" ></div>
    </div>

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
    @endpush

</x-app-layout>
