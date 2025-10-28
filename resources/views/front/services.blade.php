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
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
      [
        'icon' => 'fa-regular fa-bell',
        'title' => 'Customs Brokerage',
        'desc' => 'Navigating customs with ease, ensuring your goods clear borders swiftly and compliantly.'
      ],
    ];

    $portofolio = [
      [
        'number' => '25',
        'title' => 'Years of Industry Experience',
      ],
      [
        'number' => '300+',
        'title' => 'Employees for Your Success',
      ],
      [
        'number' => '500+',
        'title' => 'Satisfied Clients Worldwide',
      ],
      [
        'number' => '99%',
        'title' => 'On-Time Delivery',
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
          alt="" class="w-full object-cover h-[400px] rounded-2xl">
        <div
          class="text-center absolute w-full top-0 h-full bg-black bg-opacity-20 rounded-lg flex flex-col items-center justify-center ">
          <h2
            class="text-white max-w-[450px] md:max-w-[650px] lg:max-w-[850px] text-3xl md:text-5xl lg:text-7xl mb-5 font-semibold mt-5">
            Wedding Services
          </h2>
          <p class="max-w-[500px] md:max-w-[550px] lg:max-w-[760px] text-base text-white">
            Our comprehensive logistics solution is designed to optimize your supply chain and enhance your business
            operations.
          </p>
          <div class="flex items-center gap-3 mt-8">
            <span class="bg-[#FF7043] w-4 h-4 rounded-full flex-shrink-0"></span>
            <p class="text-white text-base font-medium">
              CUSTOM SOLUTIONS FOR EVERY NEED
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
            Join a Growing Community of Business and Logistics Partners
          </h1>
          <p class="text-black/70 text-sm md:text-base max-w-[550px] mt-5">
            Join a dynamic community of businesses and logistics partners,
            optimizing supply chains and driving growth.
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
            LOGISTIC SERVICES
          </p>
        </div>
        <h1 class="text-3xl/snug md:text-4xl/snug lg:text-5xl/snug font-semibold mt-5 md:mt-5 lg:mt-8">
          Comprehensive Logix Services Tailored to
          Meet Your Unique Needs
        </h1>
        <p class="text-black/70 text-sm md:text-base mt-5">
          Our vision is to be the leading logistics partner, known for excellence in supply chain management, innovation,
          and customer satisfaction, while exceeding expectations and driving success for our clients globally.
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
          Our Proven Process for Excellence
        </h1>
      </div>

      <div class="mt-10 grid grid-cols-1 md:grid-cols-2 md:gap-14 lg:gap-8">
        <div class="">
          <p class="text-black/70 text-sm md:text-base mb-10 md:mb-20">
            Our process is simple yet effective. Every project is different, but
            we've seen thousands of them since we first launched. Our
            experience is your asset.
          </p>
          <img
            src="https://images.unsplash.com/photo-1761116362962-3cd736532ea2?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8d2VkZGluZ3xlbnwwfDB8Mnx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            class="w-[550px] h-[270px] object-cover mb-14 md:mb-0" alt="">
        </div>
        <div class="flex flex-col gap-7 md:gap-20">
          <div class="border-y border-[#FF7043] flex items-start py-8 gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">In-Depth Consultation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Carefully assessing your logistics needs to
                ensure tailored and effective solutions.
              </p>
            </div>
          </div>
          <div class=" flex items-start py-8 gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">In-Depth Consultation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Carefully assessing your logistics needs to
                ensure tailored and effective solutions.
              </p>
            </div>
          </div>
          <div class=" flex items-start py-8 gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">In-Depth Consultation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Carefully assessing your logistics needs to
                ensure tailored and effective solutions.
              </p>
            </div>
          </div>
          <div class=" flex items-start py-8 gap-8">
            <h1 class="text-7xl md:text-7xl lg:text-8xl text-[#FF7043]/70">01</h1>
            <div class="">
              <h2 class="text-xl md:text-2xl mb-3 font-semibold">In-Depth Consultation</h2>
              <p class="text-black/70 text-sm md:text-base max-w-[350px] md:w-full">
                Carefully assessing your logistics needs to
                ensure tailored and effective solutions.
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="w-full py-20 px-[20px] md:px-[65px]">
      <div class="max-w-[1200px] mx-auto">
        <div class="flex items-center justify-center gap-2">
          <img class="rounded-full w-[55px] h-[55px] object-cover" alt="Ellipse"
            src="../assets/backgrounds/moonevent.jpg" />
          <p class="font-bold text-lg">Moon Event Organizer</p>
        </div>

        <ul
          class="flex flex-wrap gap-5 justify-center md:gap-14 items-center mx-auto max-w-[200px] md:max-w-[550px] my-7">
          <li class="py-3 px-3 border-b-2 border-black">
            <a href="">Home</a>
          </li>
          <li class="py-3 px-3">
            <a href="">About</a>
          </li>
          <li class="py-3 px-3">
            <a href="">Team</a>
          </li>
          <li class="py-3 px-3">
            <a href="">Services</a>
          </li>
          <li class="py-3 px-3">
            <a href="">Reservasi</a>
          </li>
        </ul>

        <div class="md:max-w-[850px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
          <div
            class="w-full shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
            <h2 class="text-xl font-semibold">Contact</h2>
            <p class="my-3 text-gray-700">JGU Depok</p>
            <p class="text-gray-700">+627876124734</p>
          </div>
          <div
            class="w-full shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
            <h2 class="text-xl font-semibold">Working Hours</h2>
            <p class="my-3 text-gray-700">Monday-Friday : 08:00 - 05:00</p>
            <p class="text-gray-700">Saturday-Sunday : 08:00 - 05:00</p>
          </div>
        </div>

        <div class="flex max-w-36 mx-auto my-10 justify-between">
          <a href="" class="px-3 py-1 bg-orange-500/40">
            <i class="fa-brands fa-instagram text-lg"></i>
          </a>
          <a href="" class="px-3 py-1 bg-orange-500/40">
            <i class="fa-brands fa-tiktok text-lg"></i>
          </a>
          <a href="" class="px-3 py-1 bg-orange-500/40">
            <i class="fa-brands fa-facebook text-lg"></i>
          </a>
        </div>

        <p class="text-center text-gray-700">Copyright by <span class="font-semibold">Moon Event Organizer</span> -
          Powered by <span class="font-semibold">Team Programmer Moon Event Organizer</span></p>
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