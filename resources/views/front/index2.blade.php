@extends('front.layouts.app')
@section('content')
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <section>
    <nav id="navbar"
      class="flex w-full items-center justify-between px-[65px] py-4 bg-[#F5F5F5] transition-all duration-300 fixed top-0 left-0 right-0 z-50">
      <div class="flex items-center gap-5">
        <img class="rounded-full w-[55px] h-[55px] object-cover" alt="Ellipse"
          src="../assets/backgrounds/moonevent.jpg" />
        <div
          class="relative w-fit [font-family:'Inter-SemiBold',Helvetica] font-semibold text-[#1b1b1b] text-lg tracking-[0] leading-[normal] whitespace-nowrap">
          Moon Event Organizer
        </div>
      </div>
      <div class="flex gap-8 items-center relative">
        <a href="">
          Home
        </a>
        <a href="">
          About
        </a>
        <a href="">
          Team
        </a>
        <a href="">
          Service
        </a>
        <a href="">
          Reservasi
        </a>
        <span class="absolute top-0 right-[7.9rem] h-full w-[2px] bg-orange-500 transform translate-x-full"></span>
        <a href="" class="px-8 py-3 bg-[#FF7043] rounded-lg text-white font-semibold">Login</a>
      </div>
    </nav>


    <div class="w-full h-[450px] relative">
      <img class="w-full h-full object-cover" alt="Ellipse" src="{{ asset('assets/thumbnails/heroImage.png') }}" />

      <div class="text-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 ">
        <p class="text-black font-bold text-lg md:text-xl">Creating Timeless Wedding Memories</p>
        <h2 class="text-orange-500 leading-3 text-3xl md:text-4xl font-bold mt-5">Crafting Ever <span
            class="text-black">After Moments</span> <br> with Moon Event
          Organizer</h2>
      </div>
    </div>


    <div class="w-full px-[65px] my-24">
      <p class="text-lg mb-3">Making Your Special Day Seamless and Stunning</p>
      <div class="flex items-center justify-between">
        <h2 class="text-2xl max-w-[370px] font-semibold">Bespoke Wedding Services for
          Every Beautiful Journey</h2>
        <a href="" class="px-8 py-2 text-white rounded-lg bg-orange-500">
          Service Price
        </a>
      </div>

      <div class="flex items-center justify-between mt-10">
        <div class="w-[32%] relative">
          <img src="{{ asset('assets/thumbnails/services.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute w-full top-0 h-full bg-black bg-opacity-30 rounded-lg flex items-center justify-center">
            <a href=""
              class="px-28 py-2 bg-orange-500 bg-opacity-50 border-2 absolute bottom-6 rounded-tl-lg rounded-br-lg border-orange-500 text-white font-semibold">Wedding</a>
          </div>
        </div>
        <div class="w-[32%] relative">
          <img src="{{ asset('assets/thumbnails/services2.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute w-full top-0 h-full bg-black bg-opacity-30 rounded-lg flex items-center justify-center">
            <a href=""
              class="px-20 py-2 bg-orange-500 bg-opacity-50 border-2 absolute bottom-6 rounded-tl-lg rounded-br-lg border-orange-500 text-white font-semibold">Building
              Rental</a>
          </div>
        </div>
        <div class="w-[32%] relative">
          <img src="{{ asset('assets/thumbnails/services3.png') }}" alt="" class="w-full h-auto object-cover">
          <div class="absolute w-full top-0 h-full bg-black bg-opacity-30 rounded-lg flex items-center justify-center">
            <a href=""
              class="px-28 py-2 bg-orange-500 bg-opacity-50 border-2 absolute bottom-6 rounded-tl-lg rounded-br-lg border-orange-500 text-white font-semibold">Event</a>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full bg-[#F5F5F5] my-24">
      <div class="px-[65px] max-w-[1030px] text-center  text-lg py-20 mx-auto">
        <p class="mb-10">"<span class="font-semibold">Moonevent</span> is a wedding organizer company that handles
          weddings from planning to execution.We manage the
          concept, decoration, vendors, and event coordination professionally.Our goal is to create a beautiful and
          memorable wedding experience"</p>


        <div class="flex items-center w-[300px] mx-auto justify-between">
          <img src="{{ asset('assets/photos/pfp.png') }}" alt="">
          <div class="">
            <p>Ibu Muna</p>
            <p>Moon Event Organizer</p>
          </div>
        </div>
      </div>
    </div>



    <div class="w-full px-[65px] my-24">
      <div class="flex justify-between px-28 py-20 items-center border border-black">
        <div class="text-center">
          <p class="text-5xl mb-5 font-semibold text-orange-500">1,245</p>
          <p>Happy Couples</p>
        </div>
        <div class="text-center">
          <p class="text-5xl mb-5 font-semibold text-orange-500">946</p>
          <p>Wedding</p>
        </div>
        <div class="text-center">
          <p class="text-5xl mb-5 font-semibold text-orange-500">156</p>
          <p>Vendor</p>
        </div>
        <div class="text-center">
          <p class="text-5xl mb-5 font-semibold text-orange-500">35+</p>
          <p>Location</p>
        </div>
      </div>
    </div>

    <div class="px-[65px] my-24">
      <h1 class="text-center text-orange-500 max-w-[305px] text-2xl font-semibold mx-auto">Memorable <span
          class="text-black">Weddings
          by</span> Moon Event Organizer</h1>


      <div class="w-full overflow-hidden mt-10"> {{-- Container untuk Slider --}}
        <div class="flex" id="slider-container"> {{-- Ini adalah Wrapper untuk semua slide --}}

          {{-- SLIDE/BLOCK PERTAMA --}}
          <div class="grid grid-cols-[1fr_2fr_1fr] gap-4 flex-shrink-0 w-full">
            {{-- Kolom Kiri (1fr) --}}
            <div class="flex flex-col gap-3">
              <div class="relative group"> {{-- Tambahkan class 'group' pada parent relative --}}
                <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
                      flex flex-col justify-center items-center
                      text-center text-white
                      w-[270px] h-[200px] bg-red-600 bg-opacity-45 rounded-lg
                      opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                  <p>Rara & Galih</p>
                  <p>Gedung Menara 165 - Jakarta Selatan</p>
                </div>
              </div>
              <div class="relative group"> {{-- Tambahkan class 'group' pada parent relative --}}
                <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
                      flex flex-col justify-center items-center
                      text-center text-white
                      w-[270px] h-[200px] bg-red-600 bg-opacity-45 rounded-lg
                      opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                  <p>Rara & Galih</p>
                  <p>Gedung Menara 165 - Jakarta Selatan</p>
                </div>
              </div>
            </div>

            {{-- Kolom Tengah (2fr) --}}
            <div>
              <img src="{{ asset('assets/photos/cardWedding.png') }}" class="w-full h-[450px] object-cover" alt="">
            </div>

            {{-- Kolom Kanan (1fr) --}}
            <div class="flex flex-col gap-3">
              <div class="relative group"> {{-- Tambahkan class 'group' pada parent relative --}}
                <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
                      flex flex-col justify-center items-center
                      text-center text-white
                      w-[270px] h-[200px] bg-red-600 bg-opacity-45 rounded-lg
                      opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                  <p>Rara & Galih</p>
                  <p>Gedung Menara 165 - Jakarta Selatan</p>
                </div>
              </div>
              <div class="relative group"> {{-- Tambahkan class 'group' pada parent relative --}}
                <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
                      flex flex-col justify-center items-center
                      text-center text-white
                      w-[270px] h-[200px] bg-red-600 bg-opacity-45 rounded-lg
                      opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                  <p>Rara & Galih</p>
                  <p>Gedung Menara 165 - Jakarta Selatan</p>
                </div>
              </div>
            </div>
          </div>

          {{-- SLIDE/BLOCK KEDUA --}}
          <div class="grid grid-cols-[1fr_2fr_1fr] gap-4 flex-shrink-0 w-full">
            {{-- Kolom Kiri (1fr) --}}
            <div class="flex flex-col gap-3">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
            </div>

            {{-- Kolom Tengah (2fr) --}}
            <div>
              <img src="{{ asset('assets/photos/cardWedding.png') }}" class="w-full h-auto object-cover" alt="">
            </div>

            {{-- Kolom Kanan (1fr) --}}
            <div class="flex flex-col gap-3">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
          </div>

          {{-- SLIDE/BLOCK ketiga --}}
          <div class="grid grid-cols-[1fr_2fr_1fr] gap-4 flex-shrink-0 w-full">
            {{-- Kolom Kiri (1fr) --}}
            <div class="flex flex-col gap-3">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
            </div>

            {{-- Kolom Tengah (2fr) --}}
            <div>
              <img src="{{ asset('assets/photos/cardWedding.png') }}" class="w-full h-auto object-cover" alt="">
            </div>

            {{-- Kolom Kanan (1fr) --}}
            <div class="flex flex-col gap-3">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
              <img src="{{ asset('assets/photos/cardWedding.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
          </div>

        </div>

        <div class="flex justify-center mt-4 space-x-2"> {{-- Flexbox untuk menengahkan dan memberi jarak antar button
          --}}
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="0"></button>
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="1"></button>
          {{-- Tambahkan button lain jika ada lebih dari 2 slide --}}
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="2"></button>
        </div>
      </div>
    </div>

    <div class="px-[65px] my-24">
      <h3 class="text-3xl font-semibold mb-8">Our <span class="text-orange-500">Testimonials</span></h3>

      <div class="w-full overflow-hidden mt-10"> {{-- Container untuk Slider --}}
        <div class="flex" id="slider-container-2"> {{-- Ini adalah Wrapper untuk semua slide --}}

          {{-- SLIDE/BLOCK PERTAMA (Berisi 5 Gambar) --}}
          <div class="grid grid-cols-5 gap-4 flex-shrink-0 w-full p-4"> {{-- Tambahkan padding jika perlu --}}
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
          </div>

          {{-- SLIDE/BLOCK KEDUA (Berisi 5 Gambar) --}}
          <div class="grid grid-cols-5 gap-4 flex-shrink-0 w-full p-4"> {{-- Tambahkan padding jika perlu --}}
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
            <div>
              <img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover">
            </div>
          </div>

          {{-- SLIDE/BLOCK KETIGA (Contoh jika ada slide ketiga) --}}
          {{-- Anda bisa menambahkannya di sini jika Anda memiliki lebih banyak kelompok gambar --}}
          <div class="grid grid-cols-5 gap-4 flex-shrink-0 w-full p-4">
            <div><img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover"></div>
            <div><img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover"></div>
            <div><img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover"></div>
            <div><img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover"></div>
            <div><img src="{{ asset('assets/photos/cardTest.png') }}" alt="" class="w-full h-auto object-cover"></div>
          </div>

        </div>

        <div class="flex justify-center mt-4 space-x-2"> {{-- Flexbox untuk menengahkan dan memberi jarak antar button
          --}}
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="0"></button>
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="1"></button>
          <button class="w-4 h-4 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors duration-200"
            data-slide-to="2"></button> {{-- Pastikan jumlah button sesuai dengan jumlah slide --}}
        </div>
      </div>
    </div>

    <div class="my-24">
      <div class="max-w-[670px] mx-auto mb-9 text-center">
        <h2 class="text-3xl font-semibold mb-3">Our <span class="text-orange-500">Vendor</span></h2>
        <p>From dreamy decor to delicious catering, we partner with experienced vendors who specialize in weddings.
          Together, we create moments that reflect your love story beautifully and seamlessly.</p>
      </div>
      <div class="w-full overflow-hidden bg-[#F5F5F5]">
        <div class="grid grid-cols-7 gap-20 flex-shrink-0 p-4">
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/AUF.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/GINTO.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/CATERINDO.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/DIAMOND.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/DOSHIN.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/NENDIA.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
          <div class="w-[150px] rounded-full">
            <img src="{{ asset('assets/vendor/NBS.jpg') }}" class="w-[150px] rounded-full h-[150px]" alt="">
          </div>
        </div>
      </div>
    </div>


    <div class="w-full px-[65px] my-24">
      <p class="text-lg mb-3">Meet Our Team</p>
      <div class="flex items-center justify-between">
        <h2 class="text-2xl max-w-[570px] font-semibold">The people behind the scenes turning ideas into moments, and
          moments into memories.</h2>
        <a href="" class="px-8 py-2 text-white rounded-lg bg-orange-500">
          Team
        </a>
      </div>

      <div class="flex flex-wrap gap-x-40 gap-y-14  w-full mt-20 items-center">
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
        <div class="w-[24%] border border-[#DFCDCB] rounded-full py-0 px-2">
          <img src="{{ asset('assets/photos/cardTeam.jpg') }}"
            class="w-full h-[300px] rounded-tl-full rounded-tr-full object-cover" alt="">
          <div class="px-10 pt-10 pb-20 text-center">
            <P class="text-2xl mb-10 font-semibold">Ibu Ayu</P>
            <p>Posisi saat ini</p>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <div class="">
      <div class="">
        <h2>Contact Us</h2>
        <div class=""></div>
      </div>
      <div class=""></div>
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

        // Opsional: Auto-play slider (misalnya setiap 5 detik)
        // let slideInterval = setInterval(() => {
        //     goToSlide(currentSlide + 1);
        // }, 5000); // Ganti 5000 dengan durasi yang diinginkan dalam ms

        // Opsional: Pause auto-play saat hover dan resume saat mouse leave
        // sliderContainer.parentNode.addEventListener('mouseenter', () => clearInterval(slideInterval));
        // sliderContainer.parentNode.addEventListener('mouseleave', () => {
        //     slideInterval = setInterval(() => {
        //         goToSlide(currentSlide + 1);
        //     }, 5000);
        // });
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