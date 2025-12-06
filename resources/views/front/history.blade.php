@extends('front.layouts.app')

@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <style>
    @layer base {
      body {
        background-color: #F2F2F2;
      }
    }
  </style>
@endpush
@section('content')
  <section class="px-[20px] md:px-[65px] mt-14">
    <div class="">
      <a href="/"
        class="flex items-center gap-2 border border-black rounded-full px-3 w-fit py-1 group font-semibold transition-all duration-300">
        <i
          class="fa-solid fa-arrow-left w-fit h-auto rounded-full flex-shrink-0 p-2 border border-black transition duration-300 group-hover:translate-x-[-10px]"></i>
        Back to home
      </a>

      <h2 class="text-3xl font-semibold mt-8">
        Your Order
      </h2>
    </div>
    <div
      class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] mt-14 rounded-lg p-4 grid grid-cols-1 md:grid-cols-2 gap-4 lg:grid-cols-1">
      @php
        $myBookings = Auth::user()->bookings
      @endphp

      @foreach ($myBookings as $booking)
        @php
          $status = $booking->status; // ambil status dari booking

          $colors = [
            'success' => 'bg-[#10B981]/30 text-[#10B981]',   // green
            'rejected' => 'bg-[#EF4444]/30 text-[#EF4444]', // red
            'pending' => 'bg-[#F59E0B]/30 text-[#F59E0B]',  // amber
            'on-progress' => 'bg-[#FF7043]/40 text-[#FF7043]', // orange
          ];

          $colorClass = $colors[$status] ?? 'bg-gray-300 text-gray-700';
          $label = match ($status) {
            'success' => 'Success',
            'rejected' => 'Rejected',
            'pending' => 'Pending',
            'on-progress' => 'On-Progress',
            default => ucfirst($status),
          };
        @endphp
        <div class="bg-white p-3 rounded-lg">
          <div class="flex flex-wrap gap-5">
            <div
              class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] rounded-lg p-2 md:w-full xl:max-w-[150px] md:max-h-[250px] xl:max-h-[150px] w-full max-h-[250px]">
              <img src="{{ Storage::url($booking->tour->thumbnail) }}" alt=""
                class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="flex flex-grow items-start flex-wrap justify-between">
              <div class="">
                <h1 class="text-lg md:text-lg lg:text-2xl font-semibold">
                  Wedding {{$booking->customer->name}} | {{$booking->tour->name}}
                </h1>
                <p class="text-black/70 text-base mt-2">{{$booking->booking_date}}</p>
                <div class="flex items-center gap-2 mt-3 mb-2 md:mb-0">
                  <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                    {{$booking->tour->pax}} pax
                  </p>
                  <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                    {{$booking->tour->category->name}}
                  </p>
                  <p class="w-fit px-3 block md:block lg:hidden py-1 rounded-lg text-sm cursor-pointer font-medium {{ $colorClass }}">
                  {{ $label }}
                </p>
                </div>
              </div>
              <div class="flex-col flex items-start md:items-end gap-3 nd:gap-6 mt-2 md:mt-4 lg:mt-0">
                <p class="text-xl font-medium">
                  Rp. {{number_format($booking->total_amount, 0, ",", ".")}}
                </p>
                <p class="w-fit px-3 hidden md:hidden lg:block py-1 rounded-lg text-sm cursor-pointer font-medium {{ $colorClass }}">
                  {{ $label }}
                </p>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </section>
@endsection