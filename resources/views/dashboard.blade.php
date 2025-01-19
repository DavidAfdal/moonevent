<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @role("customer")
        <div id="calendar" class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-[500px]" ></div>
        @endrole

        @role('super_admin')
        <div id="calendar" class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-[500px]" ></div>

        <div class="grid grid-cols-2 gap-2 max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10">
            <div class="relative">
                <canvas id="barChart" class="w-full h-auto"></canvas>
            </div>
            <div class="relative">
                <canvas id="pieChart" class="w-full h-auto"></canvas>
            </div>
        </div>
        @endrole

    </div>



    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/timegrid/main.css" rel="stylesheet" />

    @role("customer")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');


            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
                eventClick: function(info) {
                    alert('Event: ' + info.event.title);
                    info.el.style.borderColor = 'red';
                },
                eventDidMount: function(info) {
                    info.el.style.cursor = 'pointer';
                }
            });

            calendar.render();


        });
    </script>
    @endrole

    @role("super_admin")
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            const barChart = document.getElementById('barChart');
            const pieChart = document.getElementById('pieChart');

            new Chart(barChart, {
                type: 'bar',
                data: {
                labels: @json($labels_bar),
                datasets: [{
                    label: 'Total Amount',
                    data: @json($data_bar),
                    borderWidth: 1
                }]
                },
                options: {
                    responsive: true,
        maintainAspectRatio: true,
                scales: {
                    y: {
                    beginAtZero: true
                    }
                }
                }
            });

            new Chart(pieChart, {
                type: 'pie',
                data: {
                labels: @json($labels_pie),
                datasets: [{
                    label: 'Total Amount',
                    data: @json($data_pie),
                    borderWidth: 1
                }]
                },
                options: {
                responsive: true, // Grafik akan responsif
                 maintainAspectRatio: true // Mempertahankan r
                }
            });

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
                eventClick: function(info) {
                    alert('Event: ' + info.event.title);
                    info.el.style.borderColor = 'red';
                },
                eventDidMount: function(info) {
                    info.el.style.cursor = 'pointer';
                }
            });

            calendar.render();


        });
    </script>
    @endrole

    @endpush

</x-app-layout>
