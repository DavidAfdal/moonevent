@extends('front.layouts.app')

  <!-- Icons -->
  @push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
      width: 200%;
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

      <img class="w-full h-[500px] object-cover" alt="Ellipse" src="{{ asset('assets/thumbnails/heroImage.png') }}" />

      <div
        class="text-center absolute w-full top-0 h-full bg-black bg-opacity-20 rounded-lg flex flex-col items-center justify-center">
        <section class="flex items-center justify-center mb-5">
          <div class="flex items-center w-full max-w-3xl">
            <!-- Garis kiri -->
            <div class="flex-grow border-t-4 border-yellow-400"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-xl font-semibold text-white tracking-widest">
              Wedding Planner
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t-4 border-yellow-400"></div>
          </div>
        </section>
        <h2 class="text-white max-w-[750px] text-3xl md:text-5xl font-semibold mt-5 leading-relaxed">
          Crafting Ever After Moments with Moon Event Organizer
        </h2>
      </div>

      <!-- Number wedding -->
      <div class="w-full px-[65px] absolute top-[26rem]">
        <div
          class="flex justify-between px-28 py-20 items-center bg-gradient-to-r from-[#FF7043] via-[#FD1D1D] to-[#FCB045] rounded-xl">
          <div class="text-center">
            <p class="text-5xl mb-5 font-semibold text-white num" data-val="1245">0</p>
            <p class="text-white">Happy Couples</p>
          </div>
          <div class="text-center">
            <p class="text-5xl mb-5 font-semibold text-white num" data-val="946">0</p>
            <p class="text-white">Wedding</p>
          </div>
          <div class="text-center">
            <p class="text-5xl mb-5 font-semibold text-white num" data-val="156">0</p>
            <p class="text-white">Vendor</p>
          </div>
          <div class="text-center">
            <p class="text-5xl mb-5 font-semibold text-white num" data-val="35">0+</p>
            <p class="text-white">Location</p>
          </div>
        </div>
      </div>

    </div>

    <!-- About Section -->
    <div class="px-[65px]">
      <div class="text-center mt-60">
        <h1 class="text-5xl font-semibold">About Company</h1>
        <section class="flex items-center justify-center mt-5 mb-10">
          <div class="flex items-center w-full max-w-xs">
            <!-- Garis kiri -->
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-lg font-semibold text-[#FF7043] tracking-widest">
              OUR CAMPANY
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>
          </div>
        </section>
      </div>

      <div class="w-full flex gap-16 mt-12">
        <div class="w-[45%]">
          <img src="{{ asset('assets/photo_team/foto-team.png') }}" alt="" class="w-full object-cover h-[400px]">
        </div>
        <div class="w-1/2">
          <h1 class="text-3xl font-semibold leading-relaxed mb-7">
            We Are a team of passionate and experience wedding planners
          </h1>
          <p class="text-md font-light leading-relaxed mb-3 ">
            Moonevent is a wedding organizer company that handles
            weddings from planning to execution.We manage the
            concept, decoration, vendors, and event coordination professionally.Our goal is to create a beautiful and
            memorable wedding experience.
          </p>
          <p class="text-md font-light leading-relaxed mb-9">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sint voluptatibus amet officia blanditiis rerum
            omnis nisi laudantium earum sunt.
          </p>

          <a href=""
            class="px-7 py-2 border border-[#FF7043] rounded-3xl font-semibold text-lg text-[#FF7043] hover:bg-[#FF7043] hover:text-white">
            About
          </a>
        </div>
      </div>

    </div>

    <!-- Services sectcion -->
    <div class="bg-gray-100 py-10 my-32">
      <div class="px-[65px]">
        <div class="text-center">
          <section class="flex items-center justify-center my-5">
            <div class="flex items-center w-full max-w-md">
              <!-- Garis kiri -->
              <div class="flex-grow border-t-2 border-[#FF7043]"></div>

              <!-- Tulisan -->
              <span class="mx-4 text-sm font-semibold text-[#FF7043] tracking-widest">
                WEDDING SERVICES & SOLUTIONS
              </span>

              <!-- Garis kanan -->
              <div class="flex-grow border-t-2 border-[#FF7043]"></div>
            </div>
          </section>
          <h1 class="text-4xl font-semibold max-w-[650px] mx-auto">
            Variety Of Services And Resources To Support Your Special Day
          </h1>
        </div>

        <div class="w-full flex flex-wrap gap-5 mt-16 mb-11">
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-regular fa-calendar-check text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">Personalized Wedding Planning</h2>
              <p class="text-sm text text-gray-800">We provide tailored planning services to ensure every detail of your
                wedding matches your vision.</p>
            </div>
          </div>
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-solid fa-people-group text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">Event Coordination</h2>
              <p class="text-sm text text-gray-800">Our team coordinates the entire event, from the ceremony to the
                reception, so everything runs smoothly.</p>
            </div>
          </div>
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-solid fa-handshake text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">Vendor & Venue Consultation</h2>
              <p class="text-sm text text-gray-800">We connect you with trusted vendors and venues that suit your budget
                and preferences.</p>
            </div>
          </div>
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-solid fa-paintbrush text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">Design & Decoration</h2>
              <p class="text-sm text text-gray-800">From themes to floral arrangements, we create stunning decorations
                that reflect your unique style.</p>
            </div>
          </div>
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-solid fa-user-friends text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">Guest Management</h2>
              <p class="text-sm text text-gray-800">We assist with invitations, RSVP tracking, and guest coordination to
                simplify your wedding day.</p>
            </div>
          </div>
          <div
            class="w-[32%] px-8 cursor-pointer py-6 rounded-xl shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] bg-white transition transform hover:scale-100 hover:shadow-2xl duration-300">
            <i class="fa-solid fa-camera-retro text-xl"></i>
            <div class="">
              <h2 class="text-xl font-bold my-2">VenPhotography & Videography</h2>
              <p class="text-sm text text-gray-800">Capture every special moment with professional photo and video
                documentation.</p>
            </div>
          </div>

        </div>
      </div>

    </div>


    <!-- On Instagram -->
    <div class="my-36">
      <div class="text-center">
        <section class="flex items-center justify-center my-5">
          <div class="flex items-center w-full max-w-md">
            <!-- Garis kiri -->
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>

            <!-- Tulisan -->
            <span class="mx-4 text-sm font-semibold text-[#FF7043] tracking-widest">
              ON INSTAGRAM
            </span>

            <!-- Garis kanan -->
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>
          </div>
        </section>
        <h1 class="text-4xl font-semibold max-w-[650px] mx-auto">
          Complete wedding care, from planning to design.
        </h1>
      </div>
      <div class="flex flex-wrap items-center px-[65px] gap-5 mt-10">
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        <div class="w-[32%] relative group cursor-pointer"> {{-- Tambahkan class 'group' pada parent relative --}}
          <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex gap-3
          justify-center items-center text-center text-white w-[250px] py-5 bg-orange-600 bg-opacity-45 rounded-lg
          opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
            <i class="fa-brands fa-instagram text-lg"></i>
            <p>View Instagram</p>
          </div>
        </div>
        
      </div>
    </div>


    <!-- Testimonial Section -->
    <div class="px-[65px]">
      <div class="text-center py-20 bg-gray-300">
        <!-- Bagian Judul -->
        <section class="flex items-center justify-center mb-5">
          <div class="flex items-center w-full max-w-xs">
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>
            <span class="mx-4 text-lg font-semibold text-[#FF7043] tracking-widest">
              TESTIMONIALS
            </span>
            <div class="flex-grow border-t-2 border-[#FF7043]"></div>
          </div>
        </section>

        <h1 class="text-4xl font-semibold">What our clients have to say...</h1>

        <!-- Bagian Slider -->
        <div class="mt-14 relative">
          <i class="fa-solid fa-quote-left text-4xl text-orange-500 mb-4"></i>

          <!-- Container -->
          <div id="testimonial-container" class="overflow-hidden max-w-[850px] mx-auto h-[150px] relative">
            <div id="testimonial-slide" class="transition-all duration-700 ease-in-out translate-x-0 opacity-100">
              <p class="text-lg italic text-gray-800">
                “Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iste voluptas consequuntur
                cupiditate sequi numquam placeat.”
              </p>
            </div>
          </div>

          <!-- Nama & Navigasi -->
          <div class="flex max-w-[1100px] mx-auto justify-between items-center mt-8">
            <i id="prevBtn"
              class="fa-solid fa-chevron-left hover:bg-white transition-all duration-300 cursor-pointer p-2 rounded-full"></i>
            <p id="client-name" class="font-semibold text-lg">Dias & Nisya</p>
            <i id="nextBtn"
              class="fa-solid fa-chevron-right hover:bg-white transition-all duration-300 cursor-pointer p-2 rounded-full"></i>
          </div>
        </div>
      </div>
    </div>


    <!-- Vendor Section -->
    <div class="relative overflow-hidden py-20 bg-gray-100">
      <!-- Track carousel -->
      <div class="flex animate-infinite-scroll">
        <!-- Grup 1 -->
        <div class="flex items-center justify-center gap-10 shrink-0 px-10">
          <img src="{{ asset('assets/vendor/AUF.jpg') }}" class="w-[150px] h-[150px] rounded-full object-cover shadow-md"
            alt="AUF Vendor">
          <img src="{{ asset('assets/vendor/GINTO.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="GINTO Vendor">
          <img src="{{ asset('assets/vendor/CATERINDO.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="CATERINDO Vendor">
          <img src="{{ asset('assets/vendor/DIAMOND.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="DIAMOND Vendor">
          <img src="{{ asset('assets/vendor/DOSHIN.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="NBS Vendor">
          <img src="{{ asset('assets/vendor/NENDIA.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="">
          <img src="{{ asset('assets/vendor/NBS.jpg') }}" class="w-[150px] h-[150px] rounded-full object-cover shadow-md"
            alt="">
        </div>

        <!-- Grup duplikat untuk looping tanpa jeda -->
        <div class="flex items-center justify-center gap-10 shrink-0 px-10" aria-hidden="true">
          <img src="{{ asset('assets/vendor/AUF.jpg') }}" class="w-[150px] h-[150px] rounded-full object-cover shadow-md"
            alt="AUF Vendor">
          <img src="{{ asset('assets/vendor/GINTO.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="GINTO Vendor">
          <img src="{{ asset('assets/vendor/CATERINDO.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="CATERINDO Vendor">
          <img src="{{ asset('assets/vendor/DIAMOND.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="DIAMOND Vendor">
          <img src="{{ asset('assets/vendor/DOSHIN.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="NBS Vendor">
          <img src="{{ asset('assets/vendor/NENDIA.jpg') }}"
            class="w-[150px] h-[150px] rounded-full object-cover shadow-md" alt="">
          <img src="{{ asset('assets/vendor/NBS.jpg') }}" class="w-[150px] h-[150px] rounded-full object-cover shadow-md"
            alt="">
        </div>
      </div>
    </div>


    <!-- Mid Banner -->
    <div class="">
      <div class="relative max-w-full mx-auto pt-28 bg-cover bg-center h-[550px] md:h-[600px]"
        style="background-image: url('{{ asset('assets/backgrounds/midBanner.avif') }}'); background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black/60 bg-opacity-50 flex items-center justify-center">
          <div class="text-center text-white px-4">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">
              Let Us Plan Your Dream Wedding
            </h1>
            <p class="text-lg md:text-xl mb-6">
              From concept and styling to full event production, we’ll make your special day seamless and unforgettable.
            </p>
            <button
              class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 md:py-3 md:px-6 rounded-lg transition duration-300">
              Book a Consultation
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="w-full py-20">
      <div class="max-w-[1200px] mx-auto">
        <div class="flex items-center justify-center gap-2">
          <img class="rounded-full w-[55px] h-[55px] object-cover" alt="Ellipse"
            src="../assets/backgrounds/moonevent.jpg" />
          <p class="font-bold text-lg">Moon Event Organizer</p>
        </div>

        <ul class="flex justify-between items-center mx-auto max-w-[550px] my-7">
          <li class="py-3 px-5 border-b-2 border-black">
            <a href="">Home</a>
          </li>
          <li class="py-3">
            <a href="">About</a>
          </li>
          <li class="py-3">
            <a href="">Team</a>
          </li>
          <li class="py-3">
            <a href="">Services</a>
          </li>
          <li class="py-3">
            <a href="">Reservasi</a>
          </li>
        </ul>

        <div class="max-w-[850px] flex mx-auto justify-between">
          <div
            class="w-[47%] shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
            <h2 class="text-xl font-semibold">Contact</h2>
            <p class="my-3 text-gray-700">JGU Depok</p>
            <p class="text-gray-700">+627876124734</p>
          </div>
          <div
            class="w-[47%] shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] text-center py-8">
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

    <script>
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


      document.addEventListener("DOMContentLoaded", function () {
        let lastScrollTop = 0;
        const navbar = document.getElementById("navbar");

        window.addEventListener("scroll", function () {
          const scrollTop = window.scrollY || document.documentElement.scrollTop;

          if (scrollTop > lastScrollTop) {
            // Scroll ke bawah -> sembunyikan navbar
            navbar.classList.remove("show");
            navbar.classList.add("hidden");
          } else {
            // Scroll ke atas -> tampilkan navbar dengan animasi
            navbar.classList.remove("hidden");
            navbar.classList.add("show");
          }

          lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
      });


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
          }
        }, duration)
      })

      //  Slider testimonial
      document.addEventListener("DOMContentLoaded", function () {
        const testimonials = [
          {
            name: "Dias & Nisya",
            text: "“Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos iste voluptas consequuntur cupiditate sequi numquam placeat.”",
          },
          {
            name: "Rafi & Citra",
            text: "“Moon Event Organizer made our wedding perfect! Their professionalism and creativity were beyond expectations.”",
          },
          {
            name: "Adit & Laila",
            text: "“Everything went smoothly, and we couldn’t have asked for a better team. Highly recommended!”",
          },
        ];

        let currentIndex = 0;
        const slide = document.getElementById("testimonial-slide");
        const clientName = document.getElementById("client-name");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");

        // Fungsi animasi
        function animateSlide(direction) {
          // animasi keluar
          slide.classList.remove("translate-x-0", "opacity-100");
          slide.classList.add(direction === "next" ? "-translate-x-full" : "translate-x-full", "opacity-0");

          setTimeout(() => {
            // Ubah index testimonial
            currentIndex =
              direction === "next"
                ? (currentIndex + 1) % testimonials.length
                : (currentIndex - 1 + testimonials.length) % testimonials.length;

            // Ganti isi konten testimonial
            slide.innerHTML = `
                                            <p class="text-lg italic text-gray-800">${testimonials[currentIndex].text}</p>
                                          `;
            clientName.textContent = testimonials[currentIndex].name;

            // Reset posisi dari arah berlawanan sebelum masuk
            slide.classList.remove("-translate-x-full", "translate-x-full");
            slide.classList.add(direction === "next" ? "translate-x-full" : "-translate-x-full");

            // Animasi masuk
            setTimeout(() => {
              slide.classList.remove("translate-x-full", "-translate-x-full", "opacity-0");
              slide.classList.add("translate-x-0", "opacity-100");
            }, 50);
          }, 300); // waktu tunggu animasi keluar
        }

        // Event tombol
        nextBtn.addEventListener("click", () => animateSlide("next"));
        prevBtn.addEventListener("click", () => animateSlide("prev"));
      });

    </script>
  </section>
@endsection

@push('after-scripts')

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="{{asset('js/flickity-slider.js')}}"></script>
  <script src="{{asset('js/two-lines-text.js')}}"></script>
@endpush