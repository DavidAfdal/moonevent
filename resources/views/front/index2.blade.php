@extends('front.layouts.app')

<!-- Icons -->
@push("styles")
  
  <style>
    /* Animasi horizontal mulus */
    @keyframes infinite-scroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-infinite-scroll {
      width: 500%;
      animation: infinite-scroll 25s linear infinite;
    }

    /* Pause animasi saat hover (optional) */
    .animate-infinite-scroll:hover {
      animation-play-state: paused;
    }
  </style>
@endpush
@section('content')
  <section>



    <!-- Hero section -->
    <div class="w-full h-auto relative">

      <img class="w-full min-h-[500px] object-cover" alt="Ellipse" src="{{ asset('assets/thumbnails/heroImage.png') }}" />

      <div
        class="text-center absolute w-full top-0 h-full bg-black bg-opacity-20 rounded-lg flex flex-col items-center justify-center ">
        <section class="flex items-center justify-center mb-5 animate__animated animate__fadeInUp animate__duration-3s">
          <div class="flex items-center w-full max-w-3xl">
            <!-- Garis kiri -->
            <div class="flex-grow border-t-4 border-yellow-400"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-lg md:text-xl lg:text-2xl font-semibold text-white tracking-widest">
              Moonevent Organizer
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t-4 border-yellow-400"></div>
          </div>
        </section>
        <h2
          class="text-white w-fit md:min-w-[650px] lg:min-w-[750px] text-2xl md:text-3xl lg:text-5xl font-semibold mt-3 leading-relaxed animate__animated animate__fadeInUp animate__duration-3s">
          Your Partner Event Solution
        </h2>
      </div>

      <!-- Number wedding -->
      <div
        class="w-full px-[20px] md:px-[65px] absolute top-[26rem] animate__animated animate__fadeInUp animate__duration-3s">

        <div
          class="grid grid-cols-2 md:grid-cols-4 gap-6 px-8 bg-gradient-to-r from-[#FF7043] via-[#FD1D1D] to-[#FCB045] rounded-xl min-h-[250px] md:min-h-[220px] lg:min-h-[260px] items-center">

          <div class="flex flex-col items-center">
            <p class="text-3xl md:text-4xl lg:text-5xl mb-2 md:mb-4 font-semibold text-white num" data-val="50"
              data-category="withPlus">0</p>
            <p class="text-white">Room Only</p>
          </div>

          <div class="flex flex-col items-center">
            <p class="text-3xl md:text-4xl lg:text-5xl mb-2 md:mb-4 font-semibold text-white num" data-val="100"
              data-category="withPlus">0</p>
            <p class="text-white">Wedding</p>
          </div>

          <div class="flex flex-col items-center">
            <p class="text-3xl md:text-4xl lg:text-5xl mb-2 md:mb-4 font-semibold text-white num" data-val="30"
              data-category="withPlus">0</p>
            <p class="text-white">Vendor</p>
          </div>

          <div class="flex flex-col items-center">
            <p class="text-3xl md:text-4xl lg:text-5xl mb-2 md:mb-4 font-semibold text-white num" data-val="3"
              data-category="noPlus">0</p>
            <p class="text-white">Location</p>
          </div>

        </div>

      </div>


    </div>

    <!-- About Section -->
    <div class="px-[20px] md:px-[65px]" id="section-one">
      <div class="text-center mt-60" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="100">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold">
          Company Profile
        </h1>
        <section class="flex items-center justify-center mt-5 mb-10">
          <div class="flex items-center w-full max-w-xs">
            <!-- Garis kiri -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-base md:text-lg font-semibold text-[#FF7043] tracking-widest">
              OUR COMPANY
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>
          </div>
        </section>
      </div>

      <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-9 lg:gap-16 mt-12 lg:items-center">
        <div class="w-full" data-oas-anchor="#section-one" data-aos="fade-up" data-aos-duration="1000"
          data-aos-delay="300">
          <img src="{{ asset('assets/photo_team/homepageutama.jpg') }}" alt="background homepage"
            class="w-full object-cover mix-h-[300px] md:min-h-[300px] max-h-[600px]">
        </div>
        <div class="w-full" data-aos="fade-up" data-aos-duration="1000">
          <h1 class="text-2xl md:text-xl lg:text-3xl font-semibold md:leading-normal mb-5 md:mb-5 lg:mb-7">
            We are a team of passionate and experience wedding planners
          </h1>
          <p class="md:text-base lg:text-base text-black opacity-70 font-light mb-3">
            Moon Event Organizer is a professional company specializing in venue management, event organizing, and wedding
            organizing.
          </p>
          <p class="md:text-base lg:text-base font-light text-black opacity-70 mb-5">
            Founded in October 2020 as PT. Moon Event Kreasindo and led by Mrs. Munahwati—a former MICE Manager at The
            Kasablanka Hall and General Manager of Marketing at Menara 165—Moon Event has built a strong foundation of
            industry expertise.
          </p>
          <p class="md:text-base lg:text-base font-light text-black opacity-70 mb-9">
            With this experience, Moon Event has become a trusted partner for managing venues and delivering events of all
            scales, driven by a commitment to Professionalism, Creativity, and Quality Service.

          </p>

          <a href="{{ route('front.about') }}"
            class="px-7 py-2 border border-[#FF7043] rounded-3xl font-semibold text-lg text-[#FF7043] hover:bg-[#FF7043] hover:text-white transition-all duration-300">
            About
          </a>
        </div>
      </div>

    </div>

    <!-- Services sectcion -->
    <div class="bg-gray-100 py-10 my-32">
      <div class="px-[20px] md:px-[65px]" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center">
          <section class="flex items-center justify-center my-5">
            <div class="flex items-center w-full max-w-md">
              <!-- Garis kiri -->
              <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>

              <!-- Tulisan -->
              <span class="mx-4 text-sm md:text-lg font-semibold text-[#FF7043] tracking-widest">
                WEDDING SERVICES & SOLUTIONS
              </span>

              <!-- Garis kanan -->
              <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>
            </div>
          </section>
          <h1 class="text-2xl md:text-4xl lg:text-4xl font-semibold max-w-[650px] mx-auto">
            Variety Of Services And Resources To Support Your Special Day
          </h1>
        </div>

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-5 mt-12 md:mt-16 mb-11">
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white rounded-2xl p-6 group hover:bg-[#FF7043] hover:text-white transition-all cursor-pointer duration-300"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="">
              <i
                class="fa-regular fa-calendar-check w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
              <h3 class="text-lg md:text-xl font-semibold my-4">
                Wedding Organizer
              </h3>
              <p class="text-black/70 text-sm md:text-base group-hover:text-white transition-all duration-300">
                We provide tailored planning services to ensure every detail of your wedding matches your vision.
              </p>
            </div>
          </div>
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white rounded-2xl p-6 group hover:bg-[#FF7043] hover:text-white transition-all cursor-pointer duration-300"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="">
              <i
                class="fa-solid fa-people-group w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
              <h3 class="text-lg md:text-xl font-semibold my-4">
                Event Organizer
              </h3>
              <p class="text-black/70 text-sm md:text-base group-hover:text-white transition-all duration-300">
                Our team coordinates the entire event, from the ceremony to the reception, so everything runs smoothly.
              </p>
            </div>
          </div>
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white rounded-2xl p-6 group hover:bg-[#FF7043] hover:text-white transition-all cursor-pointer duration-300"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div class="">
              <i
                class="fa-solid fa-handshake w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
              <h3 class="text-lg md:text-xl font-semibold my-4">
                Wedding Planner
              </h3>
              <p class="text-black/70 text-sm md:text-base group-hover:text-white transition-all duration-300">
                We connect you with trusted vendors and venues that suit your budget and preferences.
              </p>
            </div>
          </div>
          <div
            class="shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white rounded-2xl p-6 group hover:bg-[#FF7043] hover:text-white transition-all cursor-pointer duration-300"
            data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <div class="">
              <i
                class="fa-solid fa-paintbrush w-fit h-auto px-4 py-2 md:px-5 md:py-3 text-2xl md:text-3xl bg-[#FF7043]/40 text-[#FF7043] group-hover:bg-white transition-all duration-300 rounded-xl"></i>
              <h3 class="text-lg md:text-xl font-semibold my-4">
                Function Hall Management
              </h3>
              <p class="text-black/70 text-sm md:text-base group-hover:text-white transition-all duration-300">
                From themes to floral arrangements, we create stunning decorations that reflect your unique style.
              </p>
            </div>
          </div>

        </div>
      </div>

    </div>


    <!-- On Instagram -->
    <div class="my-28 md:my-36 px-[20px] md:px-[65px]">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
        <section class="flex items-center justify-center my-5">
          <div class="flex items-center w-full max-w-md">
            <!-- Garis kiri -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-sm md:text-base font-semibold text-[#FF7043] tracking-widest">
              ON INSTAGRAM
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>
          </div>
        </section>
        <h1 class="text-2xl md:text-4xl lg:text-4xl font-semibold max-w-[650px] mx-auto">
          Complete wedding care, from planning to design
        </h1>
      </div>

      <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-5 mt-16">
        @foreach ($instagram as $item)
          <div class="w-full relative group cursor-pointer" data-oas-anchor="#section-one" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="100">
            <img src={{ Storage::url($item->thumbnail) }} alt="{{ $item->title }}"
              class="w-full max-h-[350px] rounded-lg md:h-auto object-cover">
            <div
              class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
                justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
               opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
              <i class="fa-brands fa-instagram text-lg"></i>
              <a href="{{ $item->link }}" target="_blank">View Instagram</a>
            </div>
          </div>
        @endforeach

      </div>
      @if ($instagram->count() > 0)
        <div class="flex justify-center mt-6" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
          <a href="https://www.instagram.com/mooneventorganizer/" target="_blank"
            class="flex items-center justify-center text-white gap-3 px-2 w-[150px] py-4 bg-[#FF7043] rounded-full mx-auto mt-10  hover:bg-[#E5633C] transition duration-300 group">
            See More
            <i class="fa-solid fa-arrow-right transition duration-300 group-hover:translate-x-2"></i>
          </a>
        </div>
      @endif
    </div>


    <!-- Testimonial Section -->
    <div class="mb-32 px-[20px] md:px-[65px]">
      <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
        <section class="flex items-center justify-center my-5">
          <div class="flex items-center w-full max-w-md">
            <!-- Garis kiri -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-sm md:text-base font-semibold text-[#FF7043] tracking-widest">
              TESTIMONIAL
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t md:border-t-2 border-[#FF7043]"></div>
          </div>
        </section>
        <h1 class="text-2xl md:text-4xl lg:text-4xl font-semibold max-w-[650px] mx-auto">
          What our clients have to say
        </h1>
      </div>
      <div class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-5">


        @foreach ($testimoni as $video)

          <div id="videoCard" data-embed="{{ $video->video_link }}"
            class="rounded-xl mx-auto relative w-full min-h-[500px] cursor-pointer overflow-hidden group">

            <!-- ================= IMAGE WRAPPER ================= -->
            <div id="imageWrapper" class="w-full h-full relative">
              <img src="{{ Storage::url($video->thumbnail) }}"
                alt="{{ $video->title }}"
                class="w-full h-full object-cover rounded-3xl z-0 relative transition-all duration-500 ease-out group-hover:scale-105">

              <div class="absolute inset-0 bg-black/30 rounded-3xl z-10"></div>

              <div id="textOverlay" class="w-full px-5 py-5 text-white absolute bottom-0 rounded-b-3xl z-20">
                <h2 class="text-base md:text-sm lg:text-2xl font-semibold mb-5">
                  "{{ $video->desc }} "
                </h2>
                <p class="text-sm md:text-sm lg:text-base">{{ $video->title }}</p>
              </div>

              <div id="buttonPlay" class="absolute top-10 px-5 z-20">
                <button onclick="playReels()"
                  class="btn-play bg-white/70 text-black px-5 py-2 rounded-full group-hover:bg-[#FF7043]/70 group-hover:text-white transition-all duration-300 ease-in-out text-sm md:text-base">
                  <i class="fa-solid fa-play"></i> Play Video
                </button>
              </div>
            </div>

            <!-- ================= VIDEO REELS ================= -->
            <div id="videoWrapper"
              class="hidden w-full h-[500px] max-h-[500px] absolute inset-0 rounded-3xl overflow-hidden">
              <iframe id="ytPlayer" class="w-full h-full object-cover rounded-3xl" src="" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
              </iframe>
            </div>

          </div>

        @endforeach




      </div>


      <!-- Vendor Section -->
      <div class="relative overflow-hidden py-20 bg-gray-100">
        <!-- Track carousel -->
        <div class="flex animate-infinite-scroll w-[1340%] md:w-[470%]">
          <!-- Grup 1 -->
          <div class="flex items-center justify-center gap-10 shrink-0 px-10">
            
           <img src="{{ asset('assets/vendor/AUF.jpg') }}"
            class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
            alt="AUF Vendor">

          <img src="{{ asset('assets/vendor/GINTO.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="GINTO Vendor">

          <img src="{{ asset('assets/vendor/BOYZ.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="BOYZ Vendor">

          <img src="{{ asset('assets/vendor/DIAMOND.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="DIAMOND Vendor">

          <img src="{{ asset('assets/vendor/GINTO.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="GINTO Vendor">

          <img src="{{ asset('assets/vendor/GLORYON.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="GLORYON Vendor">

          <img src="{{ asset('assets/vendor/MEDIA .jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="MEDIA Vendor">

          <img src="{{ asset('assets/vendor/PURANDEWI.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="PURANDEWI Vendor">

          <img src="{{ asset('assets/vendor/vendor.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="Vendor Logo">

          <img src="{{ asset('assets/vendor/NENDANG.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="NENDANG Vendor">

          <img src="{{ asset('assets/vendor/SIRIH GADING.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="SIRIH GADING Vendor">

          <img src="{{ asset('assets/vendor/CATERINDO.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="CATERINDO Vendor">

          <img src="{{ asset('assets/vendor/DOSHIN.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="DOSHIN Vendor">

          <img src="{{ asset('assets/vendor/ANNISA.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="ANNISA Vendor">

              <img src="{{ asset('assets/vendor/NOLA.jpg') }}"
                class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md" alt="">

          <img src="{{ asset('assets/vendor/PESONAALAMANDA.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="PESONA ALAMANDA Vendor">

          <img src="{{ asset('assets/vendor/RUANGGARASI.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="RUANG GARASI Vendor">

          <img src="{{ asset('assets/vendor/SELERAUTAMA.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="SELERA UTAMA Vendor">

          <img src="{{ asset('assets/vendor/vendor3.png') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="Vendor Logo 3">

          <img src="{{ asset('assets/vendor/AMARILIZ.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="AMARILIZ Vendor">

          <img src="{{ asset('assets/vendor/3LARAS.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="3 LARAS Vendor">

          <img src="{{ asset('assets/vendor/tidars.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="TIDARS Vendor">

          <img src="{{ asset('assets/vendor/PuspitaSawargi.jpg') }}"
              class="w-[120px] h-[120px] md:w-[150px] md:h-[150px] rounded-full object-cover shadow-md"
              alt="Puspita Sawargi Vendor">

          </div>

          <!-- Grup duplikat untuk looping tanpa jeda -->
          <div class="flex items-center justify-center gap-10 shrink-0 px-10" aria-hidden="true">


          </div>
        </div>
      </div>


      <!-- Mid Banner -->
      <div class="relative max-w-full mx-auto pt-28 bg-cover bg-center min-h-[550px]"
        style="background-image: url('{{ asset('assets/thumbnails/wo4.jpg') }}'); background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black/60 bg-opacity-50 flex items-center justify-center">
          <div class="text-center max-w-[850px] text-white px-4">
            <h1 class="text-xl md:text-3xl lg:text-4xl font-bold mb-4">
              Let Us Plan Your Dream Wedding
            </h1>
            <p class="text-base md:text-lg mb-6">
              From concept and styling to full event production, we’ll make your special day seamless and
              unforgettable.
            </p>
            <a href="{{ route('front.wedding_list') }}"
              class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 md:py-3 md:px-6 rounded-lg transition duration-300">
              Book a Consultation
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('after-scripts')

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->

  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="{{asset('js/flickity-slider.js')}}"></script>
  <script src="{{asset('js/two-lines-text.js')}}"></script>


  <script>
    AOS.init({
      once: false,
      offset: 100
    });

    // resources/js/slider.js
    document.addEventListener('DOMContentLoaded', function () {
      const sliderContainer = document.getElementById('slider-container');
      // Pastikan sliderContainer ditemukan
      if (!sliderContainer) {
        console.error('Element with ID "slider-container" not found.');
        return;
      }

      const slides = Array.from(sliderContainer.children); // Konversi HTMLCollection menjadi Array
      const totalSlides = slides.length;
      let currentSlide = 0;

      const slideButtons = document.querySelectorAll('[data-slide-to]');

      // Fungsi untuk menggeser slider ke slide tertentu
      function goToSlide(index) {
        // Validasi indeks
        if (index < 0) {
          currentSlide = totalSlides - 1; // Kembali ke slide terakhir
        } else if (index >= totalSlides) {
          currentSlide = 0; // Kembali ke slide pertama
        } else {
          currentSlide = index;
        }

        // Hitung offset berdasarkan lebar slide
        // Setiap slide memiliki w-full, jadi offset adalah kelipatan dari 100%
        const offset = -currentSlide * 100;
        sliderContainer.style.transform = `translateX(${offset}%)`;
        sliderContainer.style.transition = 'transform 0.5s ease-in-out'; // Transisi halus

        updateActiveButton(); // Perbarui tampilan tombol aktif
      }

      // Fungsi untuk memperbarui kelas aktif pada tombol indikator
      function updateActiveButton() {
        slideButtons.forEach((button, index) => {
          if (index === currentSlide) {
            button.classList.add('bg-orange-500'); // Warna aktif
            button.classList.remove('bg-gray-400', 'hover:bg-gray-600'); // Hapus warna non-aktif
          } else {
            button.classList.remove('bg-orange-500'); // Hapus warna aktif
            button.classList.add('bg-gray-400', 'hover:bg-gray-600'); // Tambah warna non-aktif
          }
        });
      }

      // Tambahkan event listener ke setiap tombol navigasi
      slideButtons.forEach(button => {
        button.addEventListener('click', () => {
          const slideIndex = parseInt(button.dataset.slideTo); // Ambil indeks dari data-slide-to
          goToSlide(slideIndex);
        });
      });

      // Inisialisasi: Atur tampilan awal slider dan tombol
      goToSlide(0);

    });

    // resources/js/slider-gallery.js

    document.addEventListener('DOMContentLoaded', function () {
      const sliderContainer = document.getElementById('slider-container-2');
      if (!sliderContainer) {
        console.error('Element with ID "slider-container-2" not found.');
        return;
      }

      // Ambil semua elemen anak dari sliderContainer, yang merupakan "slide" individu Anda
      const slides = Array.from(sliderContainer.children);
      const totalSlides = slides.length;
      let currentSlide = 0;

      const slideButtons = document.querySelectorAll('[data-slide-to]');

      // Fungsi untuk menggeser slider ke slide tertentu
      function goToSlide(index) {
        // Logika untuk looping dari awal ke akhir atau sebaliknya
        if (index < 0) {
          currentSlide = totalSlides - 1; // Kembali ke slide terakhir
        } else if (index >= totalSlides) {
          currentSlide = 0; // Kembali ke slide pertama
        } else {
          currentSlide = index;
        }

        // Hitung offset berdasarkan lebar slide.
        // Karena setiap slide memiliki `w-full` dan `flex-shrink-0`,
        // mereka masing-masing mengambil 100% dari lebar container parent.
        const offset = -currentSlide * 100;
        sliderContainer.style.transform = `translateX(${offset}%)`;
        sliderContainer.style.transition = 'transform 0.5s ease-in-out'; // Transisi halus

        updateActiveButton(); // Perbarui tampilan tombol aktif
      }

      // Fungsi untuk memperbarui kelas aktif pada tombol indikator
      function updateActiveButton() {
        slideButtons.forEach((button, index) => {
          if (index === currentSlide) {
            // Tambah kelas untuk tombol aktif
            button.classList.add('bg-orange-500');
            button.classList.remove('bg-gray-400', 'hover:bg-gray-600');
          } else {
            // Hapus kelas untuk tombol aktif dan tambahkan kelas non-aktif
            button.classList.remove('bg-orange-500');
            button.classList.add('bg-gray-400', 'hover:bg-gray-600');
          }
        });
      }

      // Tambahkan event listener ke setiap tombol navigasi
      slideButtons.forEach(button => {
        button.addEventListener('click', () => {
          const slideIndex = parseInt(button.dataset.slideTo); // Ambil indeks dari data-slide-to
          goToSlide(slideIndex);
        });
      });

      // Inisialisasi: Tampilkan slide pertama dan atur tombol aktif
      goToSlide(0);
    });


    // document.addEventListener("DOMContentLoaded", function () {
    //   let lastScrollTop = 0;
    //   const navbar = document.getElementById("navbar");

    //   window.addEventListener("scroll", function () {
    //     const scrollTop = window.scrollY || document.documentElement.scrollTop;

    //     if (scrollTop > lastScrollTop) {
    //       // Scroll ke bawah -> sembunyikan navbar
    //       navbar.classList.remove("show");
    //       navbar.classList.add("hidden");
    //     } else {
    //       // Scroll ke atas -> tampilkan navbar dengan animasi
    //       navbar.classList.remove("hidden");
    //       navbar.classList.add("show");
    //     }

    //     lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    //   });
    // });


    // Number wedding
    let valueWedding = document.querySelectorAll('.num')
    let interval = 5000

    valueWedding.forEach((valueDisplay) => {
      let startValue = 0
      let endValue = parseInt(valueDisplay.getAttribute("data-val"));

      let duration = Math.floor(interval / endValue)
      let counter = setInterval(function () {
        startValue += 1
        valueDisplay.textContent = startValue
        if (startValue === endValue) {
          clearInterval(counter)
          if (valueDisplay.getAttribute('data-category') === 'withPlus') {
            valueDisplay.textContent = `${startValue}+`
          }
        }
      }, duration)
    })

    //  Slider testimonial




    document.addEventListener('DOMContentLoaded', () => {
      AOS.init({
        // Konfigurasi global opsional:
        duration: 1000, // Durasi animasi dalam ms
        once: true,    // Apakah animasi hanya terjadi sekali saat di-scroll ke bawah
        easing: 'ease-in-out', // Kurva easing default
      });
    });



  </script>

  <script>
    function playReels() {
      document.querySelectorAll(".btn-play").forEach(btn => {
        btn.addEventListener("click", function () {

          const currentCard = this.closest("#videoCard");
          const allCards = document.querySelectorAll("#videoCard");

          allCards.forEach(card => {
            const iframe = card.querySelector("iframe");
            const imageWrapper = card.querySelector("#imageWrapper");
            const videoWrapper = card.querySelector("#videoWrapper");

            if (card !== currentCard) {
              if (iframe) iframe.src = "";
              if (videoWrapper) videoWrapper.classList.add("hidden");
              if (imageWrapper) imageWrapper.classList.remove("hidden");
            }
          });

          const iframe = currentCard.querySelector("iframe");
          const imageWrapper = currentCard.querySelector("#imageWrapper");
          const videoWrapper = currentCard.querySelector("#videoWrapper");
          const embedUrl = currentCard.dataset.embed;

          // tampilkan wrapper dulu
          imageWrapper.classList.add("hidden");
          videoWrapper.classList.remove("hidden");

          // force render
          // videoWrapper.offsetHeight;

          // play
          const separator = embedUrl.includes("?") ? "&" : "?";
          iframe.src = embedUrl + separator + "autoplay=1&mute=1";
        });
      });
    }


  </script>
@endpush