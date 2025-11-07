@extends('front.layouts.app')

<!-- Icons -->
@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endpush
@section('content')

  @php
    $servicesWedding = [
      [
        'icon' => 'fa-solid fa-calendar-check',
        'title' => 'Wedding Planning & Coordination',
        'desc' => 'From concept to celebration, we organize every detail for a smooth and stress-free wedding day.'
      ],
      [
        'icon' => 'fa-solid fa-paintbrush',
        'title' => 'Design & Decoration',
        'desc' => 'Transforming your vision into reality with beautiful themes, floral designs, and elegant styling.'
      ],
      [
        'icon' => 'fa-solid fa-handshake',
        'title' => 'Venue & Vendor Management',
        'desc' => 'Connecting you with trusted venues and professional vendors suited to your preferences and budget.'
      ],
      [
        'icon' => 'fa-solid fa-camera-retro',
        'title' => 'Photography & Videography',
        'desc' => 'Capturing every beautiful moment so your love story lasts forever.'
      ],
      [
        'icon' => 'fa-solid fa-magic',
        'title' => 'Makeup & Styling',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-solid fa-music',
        'title' => 'Entertainment & Lighting',
        'desc' => 'Adding joy and atmosphere through music, performances, and stunning lighting arrangements.'
      ],
    ];

    $portofolio = [
      [
        'number' => '15+',
        'title' => 'Years of Wedding Experience',
      ],
      [
        'number' => '50+',
        'title' => 'Professional Planners & Designers',
      ],
      [
        'number' => '90+',
        'title' => 'Happy Couples',
      ],
      [
        'number' => '99%',
        'title' => 'Client Satisfaction Rate',
      ],
    ];

    $work = [
      [
        'list' => 01,
        'title' => 'In-Depth Consultation',
        'desc' => 'Carefully assessing your logistics needs to ensure tailored and effective solutions.'
      ],
      [
        'list' => 02,
        'title' => 'In-Depth Consultation',
        'desc' => 'Carefully assessing your logistics needs to ensure tailored and effective solutions.'
      ],
      [
        'list' => 03,
        'title' => 'In-Depth Consultation',
        'desc' => 'Carefully assessing your logistics needs to ensure tailored and effective solutions.'
      ],
      [
        'list' => 04,
        'title' => 'In-Depth Consultation',
        'desc' => 'Carefully assessing your logistics needs to ensure tailored and effective solutions.'
      ],
    ];
  @endphp

  <section>
    <!-- Section Hero -->
    <div class="px-[20px] md:px-[65px] mt-24">
      <div class="relative w-full">
        <img
          src="https://images.unsplash.com/photo-1503314885798-a70f8f9028d3?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=869"
          alt="" class="w-full object-cover max-h-[400px] rounded-2xl">
        <div
          class="text-center absolute w-full top-0 h-full bg-black bg-opacity-20 rounded-lg flex flex-col items-center justify-center ">
          <h2
            class="text-white max-w-[450px] md:max-w-[650px] lg:max-w-[850px] text-3xl md:text-5xl lg:text-7xl mb-5 font-semibold mt-5">
            Wedding Services
          </h2>
          <p class="max-w-[500px] md:max-w-[550px] lg:max-w-[760px] text-base text-white">
            We provide end-to-end wedding planning and design services to bring your vision to life with precision and
            care.
          </p>
          <div class="flex items-center gap-3 mt-8">
            <span class="bg-[#FF7043] w-4 h-4 rounded-full flex-shrink-0"></span>
            <p class="text-white text-base font-medium">
              Personalized Solutions for Every Couple
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Portofolio -->
    <div class="px-[20px] md:px-[65px] mt-24">
      <div class="grid grid-cols-1 md:grid-cols-2 md:gap-8 lg:gap-4">
        <div class="">
          <div class="flex items-center gap-3 mt-8">
            <span class="bg-[#FF7043] w-4 h-4 rounded-full flex-shrink-0"></span>
            <p class="text-black text-base font-medium">
              OUR COMMUNITY
            </p>
          </div>
          <h1 class=" text-2xl md:text-3xl lg:text-5xl/snug font-semibold mt-5 md:mt-8">
            Connecting Couples with the Best in the Wedding Industry
          </h1>
          <p class="text-black/70 text-sm md:text-base max-w-[550px] mt-5">
            Be part of a passionate community that celebrates love, creativity, and unforgettable wedding experiences.
          </p>
          <a href=""
            class="flex items-center gap-5 border border-black max-w-[160px] rounded-full px-3 py-2 group font-semibold transition-all duration-300 mt-10">
            Book Now
            <i
              class="fa-solid fa-arrow-right w-fit h-auto rounded-full flex-shrink-0 p-2 transition duration-300 group-hover:translate-x-2 border border-black"></i>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-8 md:mt-0">
          @foreach ($portofolio as $item)
            <div
              class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] flex flex-col justify-center items-center text-center rounded-2xl py-10 md:py-0 px-4 cursor-pointer">
              <h2 class="text-4xl md:text-5xl lg:text-6xl text-[#FF7043] font-semibold">
                {{ $item['number'] }}
              </h2>
              <p class="text-base md:text-lg lg:text-xl text-black opacity-70 mt-3">
                {{ $item['title'] }}
              </p>
            </div>
          @endforeach

        </div>
      </div>
    </div>

    <!-- Section Wedding -->
    <div class="px-[20px] md:px-[65px] mt-24">
      <div class="text-center flex flex-col justify-center flex-items max-w-[950px] mx-auto ">
        <div class="flex justify-center items-center gap-3 mt-8">
          <span class="bg-[#FF7043] w-4 h-4 rounded-full flex-shrink-0"></span>
          <p class="text-black text-base font-medium">
            WEDDING SERVICES
          </p>
        </div>
        <h1 class="text-3xl/snug md:text-4xl/snug lg:text-5xl/snug font-semibold mt-5 md:mt-5 lg:mt-8">
          Personalized Wedding Experiences for Every Couple
        </h1>
        <p class="text-black/70 text-sm md:text-base mt-5">
          We aim to craft weddings that reflect your story — combining creativity, precision, and heartfelt care to make
          your special day truly unforgettable.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-20">
        @foreach ($servicesWedding as $wedding)
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] rounded-2xl p-6 group hover:bg-[#FF7043] hover:text-white transition-all cursor-pointer duration-300">
            <div class="">
              <i
                class="{{ $wedding['icon'] }}fa-regular fa-bell w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
              <h3 class="text-lg md:text-xl font-semibold my-4">
                {{ $wedding['title'] }}
              </h3>
              <p class="text-black/70 text-sm md:text-base group-hover:text-white transition-all duration-300">
                {{ $wedding['desc'] }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <!-- Section Work -->
    <div class="px-[20px] md:px-[65px] my-32">
      <div class="">
        <div class="flex items-center gap-3 mt-8">
          <span class="bg-[#FF7043] w-4 h-4 rounded-full flex-shrink-0"></span>
          <p class="text-black text-base font-medium">
            WORK PROCESS
          </p>
        </div>
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold mt-5">
          Our Proven Process for a Perfect Celebration
        </h1>
      </div>

      <div class="mt-10 grid grid-cols-1 md:grid-cols-2 md:gap-14 lg:gap-8">
        <div class="">
          <p class="text-black/70 text-sm md:text-base mb-10 md:mb-20">
            Our process is simple yet meaningful. Every love story is unique, and we ensure your wedding reflects your
            personality and dreams beautifully.
          </p>
          <img
            src="https://images.unsplash.com/photo-1761116362962-3cd736532ea2?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8d2VkZGluZ3xlbnwwfDB8Mnx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            class="min-w-[550px] max-h-[270px] object-cover mb-14 md:mb-0" alt="">
        </div>
        <div class="flex flex-col gap-7 md:gap-20">
          <div class="border-y border-[#FF7043] flex items-start py-8 gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">Initial Consultation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Understanding your love story, style, and vision to design a wedding that’s uniquely yours.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">02</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">Concept & Planning</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Creating a detailed plan that captures your dream theme, timeline, and every special moment.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">03</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">Design & Preparation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Coordinating vendors, decorations, and styling to bring your concept to life seamlessly.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">04</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">The Wedding Day</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Executing every detail flawlessly so you can simply relax, smile, and enjoy your unforgettable day.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>







  <!-- Java script -->
  <script>

  </script>
@endsection

@push('after-scripts')

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="{{asset('js/flickity-slider.js')}}"></script>
  <script src="{{asset('js/two-lines-text.js')}}"></script>
@endpush