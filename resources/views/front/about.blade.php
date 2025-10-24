@extends('front.layouts.app')

<!-- Icons -->
@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <style>
    .input-container-float {
      position: relative;
      border-bottom: 1px solid #EF7722;
    }

    .input-container-float::after {
      content: "";
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #3b82f6;
      transition: width 0.3s ease-in-out;
    }

    .input-label-float {
      position: absolute;
      top: 0.5rem;
      left: 0;
      transition: all 0.3s ease-in-out;
      pointer-events: none;
    }

    .input-field-float:focus+.input-label-float+.input-underline::after {
      width: 100%;
    }

    .input-field-float:focus~.input-label-float,
    .input-field-float:not(:placeholder-shown)~.input-label-float {
      top: -1.25rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: #FF7043;
    }

    .input-field-float:focus+.input-underline::after {
      width: 100%;
    }
  </style>
@endpush
@section('content')
  <section>

    <!-- Section Hero -->
    <div class="px-[20px] md:px-[65px] mt-24">
      <div class="">
        <h1 class="max-w-[750px] text-center mx-auto text-3xl md:text-5xl font-semibold md:mb-7">
          Let us Make the Wedding of <span class="text-[#FF7043]/90">Your Dreams</span>
        </h1>
        <p class="text-black opacity-70 max-w-[650px] mx-auto my-7 md:my-10 text-center">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti inventore sapiente accusantium fugiat earum
          dicta.
        </p>
        <div class="grid grid-cols-2 gap-5 h-[450px] w-full max-w-4xl mx-auto">

          <div class="rounded-xl overflow-hidden row-span-2">
            <img
              src="https://images.unsplash.com/photo-1606216794079-73f85bbd57d5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8d2VkZGluZ3xlbnwwfDF8MHx8fDA%3D&auto=format&fit=crop&q=60&w=500"
              alt="Wedding Photo 1" class="object-cover w-full h-full" />
          </div>

          <div class="rounded-xl overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1583939411023-14783179e581?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjV8fHdlZGRpbmd8ZW58MHwwfDB8fHwy&auto=format&fit=crop&q=60&w=500"
              alt="Wedding Photo 2" class="object-cover w-full h-full" />
          </div>

          <div class="rounded-xl overflow-hidden">
            <img
              src="https://images.unsplash.com/photo-1504993945773-3f38e1b6a626?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fHdlZGRpbmd8ZW58MHwwfDB8fHwy&auto=format&fit=crop&q=60&w=500"
              alt="Wedding Photo 3" class="object-cover w-full h-full" />
          </div>
        </div>
      </div>
    </div>

    <!-- Section History -->
    <div class="my-28 px-[20px] md:px-[65px] max-w-[750px] mx-auto text-center">
      <h1 class="text-3xl md:text-4xl font-semibold mb-5">
        Creating the best wedding experiences since 2010
      </h1>
      <p class="text-sm md:text-base text-black opacity-70">
        We will take care of everything for you — from event planning and curation to design and production.Cum sociis
        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis
        in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
      </p>
    </div>

    <!-- Section About -->
    <div class="w-full px-[20px] md:px-[65px] grid grid-cols-1 gap-7 md:grid-cols-2">
      <div class="flex flex-col items-center justify-center">
        <p class="mb-5 mt-2 font-semibold text-[#FF7043] sm:hidden block text-lg">
          ABOUT US
        </p>
        <img
          src="https://images.unsplash.com/photo-1546032996-6dfacbacbf3f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8d2VkZGluZ3xlbnwwfDF8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
          class="rounded-t-full object-cover w-full h-[480px] md:h-[550px]" alt="">
      </div>
      <div class="flex flex-col justify-center items-center text-center">
        <div class="max-w-[450px] mx-auto">
          <img src="../assets/backgrounds/moonevent.jpg" alt="" class="w-[65px] h-auto mx-auto mb-4 grayscale">
          <p class="mb-5 mt-2 font-semibold text-[#FF7043] sm:block hidden">
            ABOUT US
          </p>
          <h1 class="text-3xl md:text-4xl font-semibold mb-5">
            Wedding & family photographer based in New York
          </h1>
          <p class="text-sm md:text-base text-black opacity-70">
            Maecenas amet ultricies fames arcu tincidunt aliquet vitae dolor eros tristique ullamcorper venenatis ornare
            id eu odio. Elit eget risus varius adipiscing volutpat nisl amet facilisis ligula porta euismod semper
            consectetur.
          </p>
        </div>

      </div>
    </div>

    <!-- Section Team -->
    <div class="px-[20px] md:px-[65px] mt-28">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="">
          <div class="bg-white">
            <div class="relative inline-flex items-center justify-center p-3">
              <span class="text-lg font-semibold text-gray-800">Our team</span>
              <div class="absolute top-0 right-0 h-4 w-4 border-t-2 border-r-2 border-[#FF7043]"></div>
              <div class="absolute bottom-0 left-0 h-4 w-4 border-b-2 border-l-2 border-[#FF7043]"></div>
            </div>
          </div>
          <h2 class="text-3xl md:text-4xl font-semibold mt-5">
            Meet the team
          </h2>
        </div>
        <div class="flex items-end justify-end mt-5">
          <p class="w-full md:max-w-[450px] text-black/70">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident repellat cumque error officia eius
            dolorem.
          </p>
        </div>
      </div>

      @php
        $teamWeddingOrganizer = [
          [
            'name' => 'Munahwati',
            'aka' => 'Ibu Muna',
            'role' => 'Event Coordinator',
            'photo' => asset('assets/orang/ibu-munah.png')
          ],
          [
            'name' => 'Budi Santoso',
            'aka' => 'Pak Budi',
            'role' => 'Event Supervisor',
            'photo' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNlcnxlbnwwfDF8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500'
          ],
          [
            'name' => 'Siti Rahmawati',
            'aka' => 'Mbak Siti',
            'role' => 'Facility Support',
            'photo' => 'https://images.unsplash.com/photo-1643325904565-065f1bf68448?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTR8fHVzZXJ8ZW58MHwxfDB8fHwy&auto=format&fit=crop&q=60&w=500'
          ],
        ];
      @endphp

      <div class="">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 
                    place-items-center gap-5 lg:gap-8 mt-20 mx-auto">
          @foreach ($teamWeddingOrganizer as $member)
            <div class="relative w-full h-[500px] md:h-[543px] bg-white shadow-[0_10px_30px_rgba(0,0,0,0.07)]
                                border-2 border-[#dfcdcb] rounded-[0_25px_0_25px]
                                p-[30px] md:p-[40px] flex flex-col box-border cursor-pointer"
              data-role="{{ $member['role'] }}">

              <!-- Card Image -->
              <div class="w-full h-[300px] md:h-[363px] rounded-[0_25px_0_25px] border-2 border-[#dfcdcb]
                                  overflow-hidden mx-auto flex-shrink-0">
                <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}" class="w-full h-full object-cover block">
              </div>

              <!-- Info -->
              <div class="flex-grow flex flex-col justify-center pt-[10px] md:pt-[15px] px-[15px] relative">

                <span class="text-xl md:text-[24px] font-semibold pl-[25px] text-left mb-[10px]">
                  {{ $member['name'] }}
                </span>

                <!-- Love Icon -->
                <img src="{{asset('assets/iconcard/love.png')}}" alt="divider icon"
                  class="absolute w-[180px] left-[10px] top-[45px] md:left-[14px] md:top-[30px]">

                <p class="text-[16px] text-[#777] text-left m-0">
                  A.K.A {{ $member['aka'] }}
                </p>

              </div>

            </div>

          @endforeach
        </div>
        <div class="">
          <a href=""
            class="flex items-center justify-center text-white gap-3 px-2 w-[150px] py-4 bg-[#FF7043] rounded-full mx-auto mt-10  hover:bg-[#E5633C] transition duration-300 group">
            See More
            <i class="fa-solid fa-arrow-right transition duration-300 group-hover:translate-x-2"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Section FAQ -->
    @php
      $faq = [
        [
          'id' => '01',
          'title' => 'Bagaimana cara kerja Moonevent?',
          'desc' => 'Moonevent adalah perusahaan wedding organizer lengkap yang menangani pernikahan dari tahap perencanaan, konsep, dekorasi, koordinasi vendor, hingga pelaksanaan acara di hari H. Kami fokus menciptakan pengalaman yang indah dan tak terlupakan bagi setiap pasangan.'
        ],
        [
          'id' => '02',
          'title' => 'Bagaimana cara kerja Moonevent?',
          'desc' => 'Moonevent adalah perusahaan wedding organizer lengkap yang menangani pernikahan dari tahap perencanaan, konsep, dekorasi, koordinasi vendor, hingga pelaksanaan acara di hari H. Kami fokus menciptakan pengalaman yang indah dan tak terlupakan bagi setiap pasangan.'
        ],
        [
          'id' => '03',
          'title' => 'Bagaimana cara kerja Moonevent?',
          'desc' => 'Moonevent adalah perusahaan wedding organizer lengkap yang menangani pernikahan dari tahap perencanaan, konsep, dekorasi, koordinasi vendor, hingga pelaksanaan acara di hari H. Kami fokus menciptakan pengalaman yang indah dan tak terlupakan bagi setiap pasangan.'
        ],
        [
          'id' => '04',
          'title' => 'Bagaimana cara kerja Moonevent?',
          'desc' => 'Moonevent adalah perusahaan wedding organizer lengkap yang menangani pernikahan dari tahap perencanaan, konsep, dekorasi, koordinasi vendor, hingga pelaksanaan acara di hari H. Kami fokus menciptakan pengalaman yang indah dan tak terlupakan bagi setiap pasangan.'
        ],
      ];
    @endphp

    <div class="px-[20px] md:px-[65px] my-44 grid grid-cols-1 md:grid-cols-2  gap-10">
      <div class="flex flex-col justify-between max-w-[500px]">
        <div class="">
          <h1 class="text-3xl md:text-4xl font-semibold">
            Frequently Asked Questions
          </h1>
          <p class="text-black/70  md:text-base mt-5 max-w-[300px] text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ad.
          </p>
        </div>
        <div class="grid grid-cols-3 gap-3 my-20">
          <img
            src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            alt="" class="rounded-xl w-[200px]">
          <img
            src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            alt="" class="rounded-xl w-[200px]">
          <img
            src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2VkZGluZ3xlbnwwfDB8MHx8fDI%3D&auto=format&fit=crop&q=60&w=500"
            alt="" class="rounded-xl w-[200px]">

        </div>
      </div>
      <div class="">
        <div class="max-w-3xl mx-auto">
          @foreach ($faq as $item)
            <div class="w-full py-4 px-4 border-t-2 border-[#FF7043] accordion-item">
              <div class="flex items-center justify-between cursor-pointer accordion-header mb-4">
                <div class="flex gap-4">
                  <p class="text-lg font-semibold text-gray-800">{{ $item['id'] }}</p>
                  <p class="text-lg font-semibold text-gray-800">
                    {{ $item['title'] }}
                  </p>
                </div>
                <p class="rounded-3xl p-2 transition-transform duration-300">
                  <i class="fa-solid fa-plus text-sm mx-auto icon-toggle text-[#FF7043] font-semibold"></i>
                </p>
              </div>

              <div class="accordion-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                <p class="text-gray-600 pb-4 pr-10">
                  {{ $item['desc'] }}
                </p>
              </div>

            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Section Contact -->
    <div class="px-[20px] md:px-[65px]">
      <div class="grid grid-cols-1 gap-10 md:gap-5 md:grid-cols-2 shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-5 md:p-8 rounded-2xl">
        <div class="">
          <h1 class="text-3xl md:text-4xl font-semibold mb-4">Send Us a Message</h1>
          <p class="text-black text-sm md:text-base opacity-70 mb-10">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, temporibus!
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-7">
            <div class="">
              <div class="mb-5">
                <h3 class="font-semibold mb-2">Email</h3>
                <p class="text-black opacity-70 text-sm">moonEventOrganizer@gmail.com</p>
              </div>
              <div class="">
                <h3 class="font-semibold mb-2">Office Address</h3>
                <p class="text-black opacity-70 text-sm">Jl. Boulevard Grand Depok City, Tirtajaya, Kec. Sukmajaya, Kota
                  Depok, Jawa Barat 16412</p>
              </div>
            </div>
            <div class="">
              <div class="mb-5">
                <h3 class="font-semibold mb-2">Phone</h3>
                <p class="text-black opacity-70 text-sm">+62865879</p>
              </div>
              <div class="">
                <h3 class="font-semibold mb-2">Working Hours</h3>
                <p class="text-black opacity-70 text-sm">
                  Monday-Friday : 08:00 - 05:00
                </p>
                <p class="text-black opacity-70 text-sm">
                  Saturday-Sunday : 08:00 - 05:00
                </p>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <a href=""
              class="bg-[#FF7043] py-4 w-[50px] flex items-center justify-center text-white rounded-full text-xl">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href=""
              class="bg-[#FF7043] py-4 w-[50px] flex items-center justify-center text-white rounded-full text-xl">
              <i class="fa-brands fa-tiktok"></i>
            </a>
          </div>
        </div>
        <div class="bg-gray-400/30 rounded-2xl">
          <form action="">
            <div class="max-w-lg mx-auto px-4 bg-transparent">
              <div class="input-container-float w-full h-12 mt-10">
                <input type="text" id="floating-input-1" placeholder=" "
                  class="input-field-float w-full h-full bg-transparent text-gray-800 text-lg focus:outline-none pt-2">
                <label for="floating-input-1" class="input-label-float text-black/50 text-lg font-normal">
                  Your Name
                </label>
                <span class="input-underline"></span>
              </div>
              <div class="input-container-float w-full h-12 mt-7">
                <input type="email" id="floating-input-1" placeholder=" "
                  class="input-field-float w-full h-full bg-transparent text-gray-800 text-lg focus:outline-none pt-2">
                <label for="floating-input-1" class="input-label-float text-black/50 text-lg font-normal">
                  Your Email
                </label>
                <span class="input-underline"></span>
              </div>
              <div class="input-container-float mt-7 w-full h-24">
                <textarea id="floating-input-message" placeholder=" " rows="3"
                  class="input-field-float input-field-textarea w-full h-full bg-transparent text-gray-800 text-lg focus:outline-none pt-2"></textarea>

                <label for="floating-input-message" class="input-label-float text-black/50 text-lg font-normal">
                  Your Message
                </label>
                <span class="input-underline"></span>
              </div>
            </div>
            <div class="flex items-end justify-end font-semibold pb-5 px-[50px]">
              <button
                class="py-2 px-4 bg-[#FF7043] hover:bg-[#E5633C] transition-all duration-300 text-white rounded-xl mt-10">
                Submit
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>


    <!-- Footer -->
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
    document.addEventListener('DOMContentLoaded', () => {
      const headers = document.querySelectorAll('.accordion-header');

      headers.forEach(header => {
        header.addEventListener('click', () => {
          const item = header.closest('.accordion-item');
          const content = item.querySelector('.accordion-content');
          const icon = item.querySelector('.icon-toggle');

          // Tutup semua accordion lainnya (opsional, jika Anda ingin hanya satu yang terbuka)
          document.querySelectorAll('.accordion-item.active').forEach(activeItem => {
            if (activeItem !== item) {
              activeItem.classList.remove('active');
              activeItem.querySelector('.accordion-content').style.maxHeight = 0;
              // Reset ikon
              const activeIcon = activeItem.querySelector('.icon-toggle');
              activeIcon.classList.remove('fa-minus');
              activeIcon.classList.add('fa-plus');

              // Rotasi ikon untuk yang lain
              activeItem.querySelector('.border').classList.remove('rotate-45');
            }
          });


          // Toggle item yang diklik
          item.classList.toggle('active');

          if (item.classList.contains('active')) {
            // Terbuka: Atur maxHeight ke tinggi konten sesungguhnya
            content.style.maxHeight = content.scrollHeight + "px";

            // Ganti ikon menjadi minus
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');


            // Putar border (efek transisi)
            // header.querySelector('.border').classList.add('rotate-45');

          } else {
            // Tertutup: Set maxHeight kembali ke 0
            content.style.maxHeight = 0;

            // Ganti ikon menjadi plus
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');

            // Reset rotasi
            header.querySelector('.border').classList.remove('rotate-45');
          }
        });
      });
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