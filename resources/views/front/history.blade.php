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
      class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] mt-14 rounded-lg p-4">
      <div class="bg-white p-3 mb-5 rounded-lg flex flex-wrap justify-between">
        <div class="flex items-start gap-8">
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] rounded-lg p-2">
            <img
              src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
              alt="" class="w-[150px] h-[150px] object-cover rounded-lg">
          </div>
          <div class="max-w-md">
            <h1 class="text-2xl font-semibold">
              Wedding Kusuma & Nessi | JGU Balroom Depok
            </h1>
            <p class="text-black/70 text-base mt-2">Oct 27, 2025</p>
            <div class="flex items-center gap-2 mt-3">
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                200 pax
              </p>
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                Wedding
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-end gap-6">
          <p class="text-xl font-medium">
            Rp. 15.000.000
          </p>
          <p class="w-fit px-3 py-1 bg-[#FF7043]/40 text-[#FF7043] rounded-lg text-sm cursor-pointer font-medium">
            On-Progress
          </p>
        </div>
      </div>
      <div class="bg-white p-3 mb-5 rounded-lg flex flex-wrap justify-between">
        <div class="flex items-start gap-8">
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] rounded-lg p-2">
            <img
              src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
              alt="" class="w-[150px] h-[150px] object-cover rounded-lg">
          </div>
          <div class="max-w-md">
            <h1 class="text-2xl font-semibold">
              Wedding Kusuma & Nessi | JGU Balroom Depok
            </h1>
            <p class="text-black/70 text-base mt-2">Oct 27, 2025</p>
            <div class="flex items-center gap-2 mt-3">
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                200 pax
              </p>
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                Wedding
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-end gap-6">
          <p class="text-xl font-medium">
            Rp. 15.000.000
          </p>
          <p class="w-fit px-3 py-1 bg-green-600 text-white rounded-lg text-sm cursor-pointer font-medium">
            Success
          </p>
        </div>
      </div>
      <div class="bg-white p-3 mb-5 rounded-lg flex flex-wrap justify-between">
        <div class="flex items-start gap-8">
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] rounded-lg p-2">
            <img
              src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
              alt="" class="w-[150px] h-[150px] object-cover rounded-lg">
          </div>
          <div class="max-w-md">
            <h1 class="text-2xl font-semibold">
              Wedding Kusuma & Nessi | JGU Balroom Depok
            </h1>
            <p class="text-black/70 text-base mt-2">Oct 27, 2025</p>
            <div class="flex items-center gap-2 mt-3">
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                200 pax
              </p>
              <p class="w-fit px-3 py-1 border border-gray-400 rounded-lg text-sm cursor-pointer font-medium">
                Wedding
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-col items-end gap-6">
          <p class="text-xl font-medium">
            Rp. 15.000.000
          </p>
          <p class="w-fit px-3 py-1 bg-[#FF7043]/40 text-[#FF7043] rounded-lg text-sm cursor-pointer font-medium">
            On-Progress
          </p>
        </div>
      </div>
    </div>
  </section>
@endsection