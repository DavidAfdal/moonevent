@extends('front.layouts.app')
@section('content')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <a href="{{route('front.details', $package_tours->slug)}}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="text-center m-auto font-semibold">Booking</p>
    </nav>
    <div class="w-[calc(100%-1px)]  items-center justify-center rounded-[20px] overflow-hidden relative">
        <img src="{{asset('assets/backgrounds/moonevent.jpg')}}" class="w-full h-full object-contain" alt="background">
      </div>
    <div id="startDateDiv" data-start-date="{{ $startDate }}"></div>
    <div id="calendar" class="max-w-7xl mx-auto sm:px-6 lg:px-8" class="custom-calendar"></div>
    <form id="booking_form" method="POST" action="{{ route('front.selected_Date', $package_tours->slug) }}">
        @csrf
        <input type="text" name="selected_Date" id="selected_date" class="hidden"/>
        <button id='save_date'  class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</button>
    </form>
    @php
    // Definisikan array events
    $events = [
        ['title' => 'Meeting', 'start' => '2024-11-13T10:00:00', 'end' => '2024-11-13T12:00:00'],
        ['title' => 'Lunch', 'start' => '2024-11-14T13:00:00', 'end' => '2024-11-14T14:00:00'],
        // Tambahkan acara lainnya sesuai kebutuhan
    ];
    @endphp

    @push('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css">
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let selectedDate = null;



const calendarElement = document.getElementById('calendar');

const startDate = document.getElementById('startDateDiv').getAttribute('data-start-date');

const parsedStartDate = startDate ? JSON.parse(startDate) : [];
console.log(parsedStartDate)

const bookedDates = Array.isArray(parsedStartDate)
    ? parsedStartDate.map((date) => {
        const dateBook = new Date(date);
        dateBook.setDate(dateBook.getDate() - 1);
        return dateBook.toISOString().split('T')[0];
      })
    : [];

    console.log("Book Dates : ", bookedDates)


const datepicker = new Datepicker(calendarElement, {
    autohide: true,
    inline: true,
    todayHighlight: true,
    beforeShowDay: (date) => {
        const formattedDate = date.toISOString().split('T')[0]; // Format date as 'YYYY-MM-DD'

        if (bookedDates.includes(formattedDate)) {
            return {
                enabled: false, // Disable the date
                classes: 'booked-date', // Add custom class for styling
                tooltip: 'This date is unavailable', // Optional: Add a tooltip
            };
        }
        return;
    },
});


const style = document.createElement('style');
style.innerHTML = `
    .booked-date {
        background-color: red !important; /* Red background for booked dates */
        color: white !important;         /* White text for better contrast */
        cursor: not-allowed !important; /* Show 'not-allowed' cursor */
    }
`;
document.head.appendChild(style);

calendarElement.addEventListener('changeDate', function (event) {
            selectedDate = event.detail.date.toISOString().split('T')[0];
            const date = new Date(selectedDate);
            date.setDate(date.getDate() + 1);
            document.getElementById('selected_date').value = date.toISOString().split('T')[0];
        });



    });

    </script>
    </section>

    @endsection
    @push('after-scripts')

    <script src="{{asset('js/details.js')}}"></script>
    @endpush
