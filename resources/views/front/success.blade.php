@extends('front.layouts.app')

@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    /* Firework Base */
    .firework {
      position: absolute;
      width: 4px;
      height: 4px;
      background: transparent;
      border-radius: 50%;
      box-shadow: 0 0 8px white;
      animation: explosion 1s ease-out forwards;
      pointer-events: none;
    }

    /* Kembang api pecah */
    @keyframes explosion {
      0% {
        transform: scale(1);
        opacity: 1;
      }

      100% {
        transform: scale(50);
        opacity: 0;
      }
    }
  </style>
@endpush

@section('content')
  <section class="px-[20px] md:px-[65px] grid grid-cols-1 md:grid-cols-2 md:gap-7 mt-10">

    <!-- Firework Container -->
    <div id="fireworks-container" class="hidden fixed inset-0 z-[9999] pointer-events-none bg-transparent"></div>

    <div class="max-w-xl mx-auto flex flex-col justify-center items-start">
      <img src="{{ asset("assets/backgrounds/moonevent.jpg") }}" alt=""
        class="rounded-full w-[60px] h-[60px] md:w-[80px] md:h-[80px] lg:w-[90px] lg:h-[90px] object-cover">
      <h1 class="text-3xl/snug md:text-3xl/snug lg:text-5xl/snug font-semibold my-5">
        Booking confirmed successfully!
      </h1>
      <p class="my-6 text-sm md:text-sm lgtext-base text-black/70">
        Thank you for choosing to book with Usecheckin! Your reservation is confirmed.
        If there's anything you need before your arrival, please don't hesitate to reach out to your host!
      </p>
      <div class="flex flex-wrap items-center gap-3 md:gap-3 lg:gap-4">
        <a href="https://wa.link/yiggct" class="bg-[#FF7043] flex gap-4 items-center rounded-full text-base md:text-lg font-medium text-white px-5 py-3">
          <i class="fa-brands fa-whatsapp size-4"></i>  Confirm to Whatsapp
        </a>
        <a href="/"
          class="flex items-center gap-5 border border-black rounded-full px-3 py-2 group font-semibold transition-all duration-300">
          Go back to home
          <i
            class="fa-solid fa-arrow-right w-fit h-auto rounded-full flex-shrink-0 p-2 border border-black transition duration-300 group-hover:translate-x-2"></i>
        </a>
      </div>
    </div>

    <div class="mt-7">
      <div>
        <div class="flex items-center justify-between p-10 shadow-xl rounded-2xl">
          <div>
            <h1 class="text-2xl md:text-2xl lg:text-4xl font-semibold mb-3">
              Rp. {{ number_format($packageBooking->total_amount, 0, ",", ".") }}
            </h1>
            <p class="text-base">Booking Success</p>
          </div>
          <i
            class="fa-solid fa-check text-2xl w-10 h-10 md:w-14 md:h-14 lg:w-16 lg:h-16 flex items-center justify-center bg-[#FF7043]/50 text-[#FF7043] rounded-full"></i>
        </div>

        <div class="w-full mx-auto mt-5 bg-white p-6 md:p-6 lg:p-8 rounded-2xl shadow-xl">
          <h1 class="text-xl md:text-2xl lg:text-3xl font-semibold text-gray-800 mb-8">Booking details</h1>
          @php

              $datetime = \Illuminate\Support\Carbon::parse($packageBooking->booking_date)
          @endphp
          <div class="flex justify-between items-center mb-5">
            <span class="md:text-base lg:text-lg font-medium text-gray-600">Date</span>
            <span class="md:text-base lg:text-lg font-semibold text-gray-900">{{ $datetime->format('M d, Y ') }}</span>
          </div>

          <div class="flex justify-between items-center mb-5">
            <span class="md:text-base lg:text-lg font-medium text-gray-600">Username</span>
            <span class="md:text-base lg:text-lg font-semibold text-gray-900">{{ $packageBooking->customer->name }}</span>
          </div>

          <div class="flex justify-between items-center mb-5">
            <span class="md:text-base lg:text-lg font-medium text-gray-600">Amount</span>
            <span class="md:text-lg lg:text-xl font-bold text-gray-900">Rp. {{ number_format($packageBooking->total_amount, 0, ",", ".") }}</span>
          </div>

          {{-- <div class="flex justify-between items-center mb-5">
            <span class="md:text-base lg:text-lg font-medium text-gray-600">Payment method</span>
            <span class="md:text-base lg:text-lg font-semibold text-gray-900">Credit Card</span>
          </div> --}}

          <div class="flex justify-between items-center mb-8">
            <span class="md:text-base lg:text-lg font-medium text-gray-600">Booking Status</span>
            <div class="flex items-center gap-3 md:text-base lg:text-lg font-semibold text-green-600">
              <i
                class="fa-solid fa-check text-base w-5 h-5 md:w-5 md:h-5 lg:w-7 lg:h-7 flex items-center justify-center bg-[#FF7043]/50 text-[#FF7043] rounded-full"></i>
              Success
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <script>
    function showFireworks() {
      const container = document.getElementById("fireworks-container");
      container.classList.remove("hidden");

      for (let i = 0; i < 20; i++) {
        const f = document.createElement("div");
        f.className = "firework";
        f.style.top = Math.random() * window.innerHeight + "px";
        f.style.left = Math.random() * window.innerWidth + "px";
        f.style.background = `hsl(${Math.random() * 360}, 90%, 60%)`;
        container.appendChild(f);

        setTimeout(() => f.remove(), 1000);
      }

      setTimeout(() => container.classList.add("hidden"), 1200);
    }

    // Jalankan otomatis saat halaman dibuka
    document.addEventListener("DOMContentLoaded", showFireworks);
  </script>
@endsection