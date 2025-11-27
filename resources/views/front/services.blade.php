@extends('front.layouts.app')

<!-- Icons -->
@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

@endpush
@section('content')

  @php
    $servicesWedding = [
      [
        'icon' => 'fa-solid fa-calendar-check',
        'title' => 'Wedding Organizer',
        'desc' => 'We provide tailored planning services to ensure every detail of your wedding matches your vision.'
      ],
      [
        'icon' => 'fa-solid fa-paintbrush',
        'title' => 'Event Organizer',
        'desc' => 'Our team coordinates the entire event, from the ceremony to the reception, so everything runs smoothly.'
      ],
      [
        'icon' => 'fa-solid fa-handshake',
        'title' => 'Wedding Planner',
        'desc' => 'We connect you with trusted vendors and venues that suit your budget and preferences.'
      ],
      [
        'icon' => 'fa-solid fa-camera-retro',
        'title' => 'Function Hall Management',
        'desc' => 'From themes to floral arrangements, we create stunning decorations that reflect your unique style.'
      ],
    ];

    $portofolio = [
      [
        'number' => '5+',
        'title' => 'Years of Wedding Experience',
        'delay' => '200'
      ],
      [
        'number' => '20+',
        'title' => 'Professional Planners & Designers',
        'delay' => '300'
      ],
      [
        'number' => '100+',
        'title' => 'Happy Couples',
        'delay' => '400'
      ],
      [
        'number' => '99%',
        'title' => 'Client Satisfaction Rate',
        'delay' => '500'
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
        <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
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
          <a href="/wedding-list"
            class="flex items-center gap-5 border border-black max-w-[160px] rounded-full px-3 py-2 group font-semibold transition-all duration-300 mt-10">
            Book Now
            <i
              class="fa-solid fa-arrow-right w-fit h-auto rounded-full flex-shrink-0 p-2 transition duration-300 group-hover:translate-x-2 border border-black"></i>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-8 md:mt-0">
          @foreach ($portofolio as $item)
            <div
              class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] flex flex-col justify-center items-center text-center rounded-2xl py-10 md:py-0 px-4 cursor-pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="{{ $item['delay'] }}">
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
      <div class="text-center flex flex-col justify-center flex-items max-w-[950px] mx-auto " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
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
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 mt-20">
        <div class="w-full p-4 rounded-xl border border-gray-300 group cursor-pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <img src={{ asset('assets/photo_team/foto-team3.jpg') }} class="object-cover rounded-t-xl max-h-[320px] w-full"
            alt="">
          <div class="flex gap-3 rounded-xl mt-4">
            <div
              class="bg-gray-100 rounded-xl p-5 group-hover:bg-[#FF7043] group-hover:text-white transition-all duration-300">
              <h3 class="text-2xl font-semibold">Wedding Organizer</h3>
              <p class="text-base mt-3">We provide tailored planning services to ensure every detail of your wedding
                matches
                your vision.</p>
            </div>
            <div
              class="flex justify-center bg-gray-100 rounded-xl items-center group-hover:bg-[#FF7043] group-hover:text-white p-4 transition-all duration-300">
              <i
                class="fa-solid fa-paintbrush w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
            </div>
          </div>
        </div>
        <div class="w-full p-4 rounded-xl border border-gray-300 group cursor-pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <img src={{ asset('assets/photo_team/foto-team3.jpg') }} class="object-cover rounded-t-xl max-h-[320px] w-full"
            alt="">
          <div class="flex gap-3 rounded-xl mt-4">
            <div
              class="bg-gray-100 rounded-xl p-5 group-hover:bg-[#FF7043] group-hover:text-white transition-all duration-300">
              <h3 class="text-2xl font-semibold">Event Organizer</h3>
              <p class="text-base mt-3">Our team coordinates the entire event, from the ceremony to the reception, so
                everything runs smoothly.</p>
            </div>
            <div
              class="flex justify-center bg-gray-100 rounded-xl items-center group-hover:bg-[#FF7043] group-hover:text-white p-4 transition-all duration-300">
              <i
                class="fa-solid fa-people-group w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
            </div>
          </div>
        </div>
        <div class="w-full p-4 rounded-xl border border-gray-300 group cursor-pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
          <img src={{ asset('assets/photo_team/foto-team3.jpg') }} class="object-cover rounded-t-xl max-h-[320px] w-full"
            alt="">
          <div class="flex gap-3 rounded-xl mt-4">
            <div
              class="bg-gray-100 rounded-xl p-5 group-hover:bg-[#FF7043] group-hover:text-white transition-all duration-300">
              <h3 class="text-2xl font-semibold">Wedding Planner</h3>
              <p class="text-base mt-3">We connect you with trusted vendors and venues that suit your budget and
                preferences.</p>
            </div>
            <div
              class="flex justify-center bg-gray-100 rounded-xl items-center group-hover:bg-[#FF7043] group-hover:text-white p-4 transition-all duration-300">
              <i
                class="fa-solid fa-handshake w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
            </div>
          </div>
        </div>
        <div class="w-full p-4 rounded-xl border border-gray-300 group cursor-pointer" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
          <img src={{ asset('assets/photo_team/foto-team3.jpg') }} class="object-cover rounded-t-xl max-h-[320px] w-full"
            alt="">
          <div class="flex gap-3 rounded-xl mt-4">
            <div
              class="bg-gray-100 rounded-xl p-5 group-hover:bg-[#FF7043] group-hover:text-white transition-all duration-300">
              <h3 class="text-2xl font-semibold">Function Hall Management</h3>
              <p class="text-base mt-3">From themes to floral arrangements, we create stunning decorations that reflect
                your unique style.</p>
            </div>
            <div
              class="flex justify-center bg-gray-100 rounded-xl items-center group-hover:bg-[#FF7043] group-hover:text-white p-4 transition-all duration-300">
              <i
                class="fa-solid fa-paintbrush w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Work -->
    <div class="px-[20px] md:px-[65px] my-32">
      <div class="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
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
        <div class="" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
          <p class="text-black/70 text-sm md:text-base mb-10 md:mb-20">
            Our process is simple yet meaningful. Every love story is unique, and we ensure your wedding reflects your
            personality and dreams beautifully.
          </p>
          <img
            src="https://images.unsplash.com/photo-1761116362962-3cd736532ea2?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8d2VkZGluZ3xlbnwwfDB8Mnx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            class="min-w-[550px] max-h-[270px] object-cover mb-14 md:mb-0" alt="">
        </div>
        <div class="flex flex-col gap-7 md:gap-20 overflow-hidden">
          <div class="border-y border-[#FF7043] flex items-start py-8 gap-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">First Meeting</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                We discuss your event concept, style, and expectations to shape a celebration that reflects your vision.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">02</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">Technical Meeting</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Finalizing the event rundown and refining the concept to match the client’s vision.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="500">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">03</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">Preparation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Preparing all essential elements needed for the event to ensure everything runs smoothly.
              </p>
            </div>
          </div>
          <div class=" flex items-start gap-8" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">04</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold ">Event Day</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Executing the event according to the finalized rundown, ensuring every detail aligns with the plans set by
                the client, WO, and all supporting vendors.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>







  <!-- Java script -->
  <script>
    AOS.init({
      once: false,
      offset: 100
    });
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