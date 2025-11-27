@extends('front.layouts.app')

<!-- Icons -->
@push("styles")
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

    .team-member-card {
      position: relative;
      width: 360.43px;
      height: 543px;
      border-radius: 0 25px 0 25px;
      background: #fff;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
      border: 2px solid #dfcdcb;
      padding: 25px;
      display: flex;
      flex-direction: column;
      box-sizing: border-box;
      margin-top: 40px;
    }

    .card-image-container {
      width: 269px;
      height: 363px;
      border-radius: 0 25px 0 25px;
      border: 2px solid #dfcdcb;
      overflow: hidden;
      margin: 0 auto;
      flex-shrink: 0;
    }

    .card-image-container img {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
    }

    .icon-love {
      position: absolute;
      top: 435px;
      left: 35px;
      width: 180px;
    }

    .team-member-card .info {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 15px 15px 0;
    }

    .member-name {
      font-size: 20px;
      padding-left: 25px;
      font-weight: 600;
      text-align: left;
      margin-bottom: 10px;
    }

    .member-aka {
      margin: 0;
      color: #777;
      font-size: 16px;
      text-align: left;
    }

    hr.section-divider {
      border: 0;
      border-top: 1px solid #eee;
      margin: 60px auto;
      width: 100%;
    }
  </style>
@endpush
@section('content')
  <section>

    <!-- Section Hero -->
    <div class="px-[20px] md:px-[65px] mt-28">
      <div class="">
        <h1 class="max-w-[750px] text-center mx-auto text-3xl md:text-5xl font-semibold md:mb-16">
          Company <span class="text-[#FF7043]/90">Profile</span>
        </h1>
        <div class="grid grid-cols-2 gap-5 w-full max-w-4xl mx-auto
                                  grid-auto-rows-[150px] md:grid-auto-rows-[200px] lg:grid-auto-rows-[940px] ">

          <div class="rounded-xl overflow-hidden row-span-2">
            <img
              src="https://images.unsplash.com/photo-1606216794079-73f85bbd57d5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8d2VkZGluZ3xlbnwwfDF8MHx8fDA%3D&auto=format&fit=crop&q=60&w=500"
              alt="Wedding Photo 1" class="object-cover w-full h-full" />
          </div>

          <div class="rounded-xl overflow-hidden">
            <img src={{ asset('assets/photo_team/foto-team2.jpg') }} alt="Wedding Photo 2"
              class="object-cover w-full h-full" />
          </div>

          <div class="rounded-xl overflow-hidden">
            <img src={{ asset('assets/photo_team/foto-team3.jpg') }} class="object-cover w-full h-full" />
          </div>

        </div>

      </div>
    </div>

    <!-- Section History -->
    <div class="my-28 px-[20px] md:px-[65px] max-w-[750px] mx-auto text-center" data-aos="fade-up"
      data-aos-duration="1000" data-aos-delay="300">
      <h1 class="text-3xl md:text-4xl font-semibold mb-5">
        Established in October 2020 as PT. Moon Event Kreasindo.
      </h1>
      <p class="text-sm md:text-base text-black opacity-70">
        To become a leading Building Management and Event Organizer company, trusted and recognized for its
        professionalism, creativity, and quality of service.
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
          class="w-full min-h-[300px] md:min-h-[450px] lg:max-h-[580px] object-cover rounded-t-full" alt=""
          data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
      </div>
      <div class="flex flex-col justify-center items-center text-center">
        <div class="max-w-[550px] mx-auto" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
          <img src="../assets/backgrounds/moonevent.jpg" alt="" class="w-[65px] h-auto mx-auto mb-4 grayscale">
          <p class="mb-5 mt-2 font-semibold text-[#FF7043] sm:block hidden">
            ABOUT US
          </p>
          <h1 class="text-2xl md:text-4xl font-semibold mb-5">
            Our Mission and Commitment at Moon Event
          </h1>
          <p class="text-sm md:text-base text-black opacity-70">
            Our mission is to create memorable event experiences while maintaining strong relationships with clients and
            partners. We are dedicated to providing structured, innovative, and reliable event solutions, as well as
            managing venues with high operational standards.
          </p>
        </div>

      </div>
    </div>

    <!-- Section Team -->
    <div class="px-[20px] md:px-[65px] mt-28">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="100">
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
        <div class="flex items-end justify-end mt-5" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
          <p class="w-full md:max-w-[450px] text-black/70">
            Behind every unforgettable celebration is a team that truly cares about turning your vision into reality.
          </p>
        </div>
      </div>

      @php
        $teamWeddingOrganizer = [
          [
            'name' => 'Lusy',
            'aka' => 'Tante Lusy',
            'role' => 'Event Coordinator',
            'photo' => asset('assets/orang/tante-lucy.png'),
            'delay' => 400
          ],
          [
            'name' => 'Edi',
            'aka' => 'Om Edy',
            'role' => 'Event Supervisor',
            'photo' => asset('assets/orang/om_edi.png'),
            'delay' => 500
          ],
          [
            'name' => 'Kusumawardhana H.S',
            'aka' => 'Aa Dhana',
            'role' => 'Facility Support',
            'photo' => asset('assets/orang/aa_dhana.png'),
            'delay' => 500
          ],
        ];
      @endphp

      <div class="">
        <div class="mt-10">
          <div class="w-full flex justify-center mb-8" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="300">
            <div class="w-full max-w-[360px]">
              <div class="team-member-card mx-auto">
                <div class="card-image-container">
                  <img src="{{ asset('assets/orang/ibu-munah.png') }}" alt="Foto Munahwati">
                </div>
                <div class="info">
                  <span class="member-name ">Munahwati</span>
                  <img src="{{ asset('assets/iconcard/love.png') }}" class="icon-love" alt="divider icon">
                  <p class="member-aka">A.K.A Ibu Muna</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 
                                                place-items-center gap-5 lg:gap-8 mt-100 mx-auto">
          @foreach ($teamWeddingOrganizer as $member)
            <div class="team-member-card wedding-card" data-role="{{ $member['role'] }}" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="{{ $member['delay'] }}">
              <div class="card-image-container">
                <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}">
              </div>
              <div class="info">
                <span class="member-name ">{{ $member['name'] }}</span>
                <img src="{{asset('assets/iconcard/love.png')}}" class="icon-love" alt="divider icon">
                <p class="member-aka">A.K.A {{$member['aka'] }}</p>
              </div>
            </div>

          @endforeach
        </div>
        <div class="">
          <a href="/team"
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
          'title' => 'What services does Moon Event Organizer provide?',
          'desc' => 'MoonEvent offers a complete range of services, including: Building Management, Event Organizer services (seminars, gatherings, graduations, mini concerts, product launches), and Wedding Organizer services (wedding planning & wedding day coordination). We also provide decoration, documentation, multimedia, and technical event coordination.'
        ],
        [
          'id' => '02',
          'title' => 'How is the service booking process at Moon Event Organizer?',
          'desc' => 'Clients can contact us through WhatsApp, email, or the booking form on our website. Our team will conduct a needs consultation, create a concept plan, prepare a proposal, and arrange a technical meeting before the event execution.'
        ],
        [
          'id' => '03',
          'title' => 'Does Moonevent offer customizable service packages?',
          'desc' => 'Yes. Moonevent provides flexible and customizable services tailored to the client’s needs, event location, budget, and preferred concept. We also offer packages ranging from basic to premium for various types of events.'
        ],
        [
          'id' => '04',
          'title' => 'Bagaimana cara kerja Moonevent?',
          'desc' => 'Moonevent adalah perusahaan wedding organizer lengkap yang menangani pernikahan dari tahap perencanaan, konsep, dekorasi, koordinasi vendor, hingga pelaksanaan acara di hari H. Kami fokus menciptakan pengalaman yang indah dan tak terlupakan bagi setiap pasangan.'
        ],
      ];
    @endphp

    <div class="px-[20px] md:px-[65px] my-44 grid grid-cols-1 md:grid-cols-2  gap-10">
      <div class="flex flex-col justify-between max-w-[500px]" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="100">
        <div class="">
          <h1 class="text-3xl md:text-4xl font-semibold">
            Frequently Asked Questions
          </h1>
          <p class="text-black/70  md:text-base mt-5 max-w-[300px] text-sm">
            Find quick answers to the most common questions about our services, processes, and event arrangements.
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
        <div class="max-w-3xl mx-auto" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="200">
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
    <div class="px-[20px] md:px-[65px]" data-aos="fade-up"
            data-aos-duration="1000" data-aos-delay="100">
      <div
        class="grid grid-cols-1 gap-10 md:gap-5 md:grid-cols-2 shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-5 md:p-8 rounded-2xl">
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
                <p class="text-black opacity-70 text-sm">KAMPUS JAKARTA GLOBAL UNIVERSITY (JGU), GRAND DEPOK CITY, JL.
                  BOULEVARD RAYA NO.2 KOTA DEPOK 16412</p>
              </div>
            </div>
            <div class="">
              <div class="mb-5">
                <h3 class="font-semibold mb-2">Phone</h3>
                <p class="text-black opacity-70 text-sm">0821-1036-1665</p>
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
  </section>







  <!-- Java script -->
  <script>
    AOS.init({
      once: false,
      offset: 100
    });
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