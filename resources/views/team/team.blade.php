@extends('front.layouts.app')

@section('title', 'Tim Kami - Moon Event Organizer')

@push('styles')
  <style>
    /* LOAD FONTS */
    @import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap');

    /* General Styling */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #ffffff;
      color: #333;
    }

    .container-team {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      background-color: #fff;
      border-bottom: 1px solid #eee;
    }

    .navbar .logo img {
      height: 40px;
      vertical-align: middle;
    }

    .navbar nav a {
      margin-left: 30px;
      text-decoration: none;
      color: #333;
      font-weight: 500;
      font-size: 16px;
    }

    .navbar nav a.active {
      color: #FF7A59;
      font-weight: 600;
    }

    .navbar .login-btn {
      background-color: #FF7A59;
      color: white;
      padding: 10px 25px;
      border-radius: 25px;
      text-decoration: none;
      font-weight: 500;
    }

    /* Hero Section */
    .hero-section {
      background-image: url('background-team.png');
      background-size: cover;
      background-position: center;
      color: white;
      text-align: center;
      padding: 100px 20px;
      position: relative;
      overflow: hidden;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 0;
    }

    .hero-section .hero-content {
      position: relative;
      z-index: 1;
      background-color: #ffffff39;
      padding: 30px;
      border-radius: 35px;
      display: inline-block;
    }

    .hero-section h1 {
      font-family: 'Cinzel', serif;
      font-size: 48px;
      margin: 0;
      font-weight: 800;
      letter-spacing: 1px;
    }

    .hero-section h1 span {
      color: #FF7A59;
    }

    .hero-section p {
      font-family: 'Cinzel', serif;
      font-size: 20px;
      /* tetap seperti semula */
      margin-top: 10px;
      font-weight: 525;
      letter-spacing: .5px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
      /* Tambahkan baris ini */
    }

    /* Team Section */
    .team-section {
      padding: 40px 0;
      text-align: left;
    }

    /* Tabs */
    .tabs {
      border-bottom: 1px solid #e0e0e0;
      margin-bottom: 30px;
      display: inline-block;
    }

    .tabs button {
      background: none;
      border: none;
      padding: 15px 25px;
      font-size: 16px;
      cursor: pointer;
      font-weight: 500;
      color: #888;
      position: relative;
      bottom: -1px;
    }

    .tabs button.active {
      color: #333;
      font-weight: 600;
      border-bottom: 3px solid #FF7A59;
    }

    /* === ROLE FILTERS (FINAL UPDATE) === */
    .role-filters-container {
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
    }

    .role-filters {
      display: flex;
      align-items: center;
      background-color: #ffeae3;
      border-radius: 50px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      overflow-x: auto;
      scroll-behavior: smooth;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
      width: 100%;
      padding: 7px 0;
      /* Add padding to avoid content hiding under arrows */
      box-sizing: border-box;
    }

    .role-filters::-webkit-scrollbar {
      display: none;
    }

    .role-filters button {
      background-color: transparent;
      color: #a08c86;
      padding: 10px 22px;
      border-radius: 25px;
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
      white-space: nowrap;
      flex-shrink: 0;
    }

    .role-filters button:first-child {
      margin-left: 50px;
    }

    .role-filters button:last-child {
      margin-right: 50px;
    }

    .role-filters button.active {
      background-color: #FF7A59;
      color: white;
      box-shadow: 0 3px 8px rgba(255, 122, 89, 0.4);
    }

    .arrow-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: #FF7A59;
      color: white;
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      font-size: 24px;
      font-weight: 500;
      cursor: pointer;
      z-index: 2;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .arrow-btn.left {
      left: 5px;
      padding-right: 3px;
      /* visual alignment for arrow */
    }

    .arrow-btn.right {
      right: 5px;
      padding-left: 3px;
      /* visual alignment for arrow */
    }

    /* === CARD STYLING SECTION === */
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

    /* Gallery Section */
    .gallery-section {
      padding: 60px 0;
    }

    .gallery-section h2 {
      font-size: 32px;
      font-weight: 600;
      line-height: 1.4;
      text-align: left;
      margin-bottom: 40px;
    }

    .gallery-section h2 .orange-text {
      color: #FF7A59;
    }

    .gallery-slider {
      position: relative;
      min-height: 455px;
    }

    .gallery-slide {
      display: flex;
      /* Ubah dari 'none' ke 'flex' agar layout internalnya siap */
      align-items: center;
      gap: 25px;

      /* Tambahan untuk animasi fade */
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      justify-content: center;
      /* Menggantikan 'justify-content' yang dihapus dari parent */
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
    }

    .gallery-slide.active {
      opacity: 1;
      visibility: visible;
    }

    .side-images {
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    .gallery-item {
      background-color: #fff;
      border: 2px solid #D6CFCF;
      border-radius: 15px;
      padding: 12px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
      box-sizing: border-box;
    }

    .gallery-item.small-item {
      width: 268.71px;
      height: 195.84px;
    }

    .gallery-item.main-item {
      width: 656px;
      height: 450.97px;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    .slider-dots {
      text-align: center;
      margin-top: 30px;
    }

    .slider-dots span {
      display: inline-block;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background-color: #D6CFCF;
      margin: 0 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .slider-dots span.active {
      background-color: #FF7A59;
    }
  </style>
@endpush


@section('content')

  {{-- <header class="navbar">
    <div class="logo">
      <img src="{{asset('assets/backgrounds/moonevent.jpg')}}" alt="Moon Event Organizer">
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#" class="active">Team</a>
      <a href="#">Service</a>
      <a href="#">Reservasi</a>
      <a href="#" class="login-btn">Login</a>
    </nav>
  </header> --}}

  <main>
    <section class="hero-section"
      style="background-image: url('https://images.unsplash.com/photo-1529636798458-92182e662485?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=869');">
      <div class="hero-content">
        <h1><span class="our-text">OUR</span> WEDDING PLANNER</h1>
        <p>A team of highly skilled professional available to assist you</p>
      </div>
    </section>

    <div class="container-team">
      <section class="team-section">
        <div class="tabs">
          <button class="tab-btn active" data-target="wedding">Team Wedding Organizer</button>
          <button class="tab-btn" data-target="office">Team Office</button>
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
              'name' => 'Rara',
              'aka' => 'Tante Rara',
              'role' => 'Event Supervisor',
              'photo' => asset('assets/orang/tante-rara.png')
            ],
            [
              'name' => 'Edi Kurniawan',
              'aka' => 'Om Edi',
              'role' => 'Facility Support',
              'photo' => asset('assets/orang/om_edi.png')
            ],
            [
              'name' => 'Kusumawardhana H.S',
              'aka' => 'Aa Dhana',
              'role' => 'Event Supervisor',
              'photo' => asset('assets/orang/aa_dhana.png')
            ],
            [
              'name' => 'Bimo Akbar Adhimukti',
              'aka' => 'Abang Bimo',
              'role' => 'Facility Support',
              'photo' => asset('assets/orang/abang-bimo.png')
            ],
            [
              'name' => 'Dias Hafizhan',
              'aka' => 'Abang Hafiz',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/abang-dias.jpg')
            ],
            [
              'name' => 'Fadli',
              'aka' => 'Mas Fadli',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/mas-andi.png')
            ],
            [
              'name' => 'Rizma',
              'aka' => 'Mba Rizma',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/mas-andi.png')
            ],
            [
              'name' => 'Aulia',
              'aka' => 'Kak Aulia',
              'role' => 'Food And Beverage',
              'photo' => asset('assets/orang/rizky.png')
            ],
            [
              'name' => 'Dian',
              'aka' => 'Mas Dian',
              'role' => 'Food And Beverage',
              'photo' => asset('assets/orang/rizky.png')
            ],
            [
              'name' => 'Ayu',
              'aka' => 'Ibu Ayu',
              'role' => 'Food And Beverage',
              'photo' => asset('assets/orang/ibu-ayu.jpg')
            ],
            [
              'name' => 'Hamam',
              'aka' => 'Mas Hamam',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/rizky.png')
            ],
            [
              'name' => 'Rangga',
              'aka' => 'Aa Rangga',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/rizky.png')
            ],
            [
              'name' => 'Arsya',
              'aka' => 'Abang Arsya',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/rizky.png')
            ],
            [
              'name' => 'Fatur',
              'aka' => 'Mas Fatur',
              'role' => 'Photograp',
              'photo' => asset('assets/orang/rizky.png')
            ],
          ];

          $teamOffice = [
            [
              'name' => 'Munahwati',
              'aka' => 'Ibu Muna',
              'role' => 'President Director',
              'photo' => asset('assets/orang/ibu-munah.png')
            ],
            [
              'name' => 'Lucy',
              'aka' => 'Tante Lucy',
              'role' => 'Head Of Sales',
              'photo' => asset('assets/orang/tante-lucy.png')
            ],
            [
              'name' => 'Edi',
              'aka' => 'Om Edi',
              'role' => 'Head Of Banquet',
              'photo' => asset('assets/orang/om_edi.png')
            ],
            [
              'name' => 'Naura',
              'aka' => 'Kak Naura',
              'role' => 'Secretary',
              'photo' => asset('assets/orang/kak-naura.jpg')
            ],
            [
              'name' => 'Kusumawardhana H.S',
              'aka' => 'Aa Dhana',
              'role' => 'Supervisor Event',
              'photo' => asset('assets/orang/aa_dhana.png')
            ],
            [
              'name' => 'Bimo Akbar Adhimukti',
              'aka' => 'Abang Bimo',
              'role' => 'Admin',
              'photo' => asset('assets/orang/abang-bimo.png')
            ],
            [
              'name' => 'Nazra',
              'aka' => 'Kak Nazra',
              'role' => 'Public Relations',
              'photo' => asset('assets/orang/kak-nazra.png')
            ],
            [
              'name' => 'David Afdal Kaizar',
              'aka' => 'Bung David',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/bung-david.jpg')
            ],
            [
              'name' => 'Dias Hafizhan',
              'aka' => 'Abang Dias',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/abang-dias.jpg')
            ],
            [
              'name' => 'I Kadek Andika D.P',
              'aka' => 'Bung Kadek',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/bung-kadek.jpg')
            ],
          ];
        @endphp

        {{-- office secttion --}}
        <div class="tab-content hidden" id="office">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-7 w-full" id="office">
            @foreach ($teamOffice as $member)
              <div class="w-full">

                <p class="font-bold text-lg mb-2">{{ $member['role'] }}</p>
                <div class="w-[calc(100%-20px)] h-[2px] bg-black"></div>
                <div class="team-member-card">
                  <div class="card-image-container">
                    <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}">
                  </div>
                  <div class="info">
                    <span class="member-name ">{{ $member['name'] }}</span>
                    <img src="{{asset('assets/iconcard/love.png')}}" class="icon-love" alt="divider icon">
                    <p class="member-aka">A.K.A {{$member['aka'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        {{-- end office section --}}

        {{-- wedding section --}}
        <div class="tab-content" id="wedding">
          <div class="role-filters-container">
            <button class="arrow-btn left">&lsaquo;</button>
            <div class="role-filters">
              <button class="role-tab" data-role="Event Coordinator">Event Coordinator</button>
              <button class="role-tab" data-role="Event Supervisor">Event Supervisor</button>
              <button class="role-tab" data-role="Facility Support">Facility Support</button>
              <button class="role-tab" data-role="VIP Management">VIP Management</button>
              <button class="role-tab" data-role="Food And Beverage">Food And Beverage</button>
              <button class="role-tab" data-role="Front Line">Front Line</button>
              <button class="role-tab" data-role="Photograp">Photograph</button>
            </div>
            <button class="arrow-btn right">&rsaquo;</button>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-7 w-full">
            @foreach ($teamWeddingOrganizer as $member)
              <div class="team-member-card wedding-card" data-role="{{ $member['role'] }}">
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
        </div>
        {{-- end wedding section --}}

      </section>

      {{-- <hr class="section-divider">

      <section class="gallery-section">
        <h2>
          <span class="orange-text">Signature Moments Crafted</span><br>
          by <span class="orange-text">Our Wedding Dream Team</span>
        </h2>

        <div class="gallery-slider">
          <div class="gallery-slide active">
            <div class="side-images">
              <div class="gallery-item small-item"><img src="gallery-1.jpg" alt="Team Photo 1"></div>
              <div class="gallery-item small-item"><img src="gallery-3.jpg" alt="Team Photo 3"></div>
            </div>
            <div class="gallery-item main-item"><img src="{{asset('assets/photo_team/foto-team.png')}}"
                alt="Engagement Photo"></div>
            <div class="side-images">
              <div class="gallery-item small-item"><img src="gallery-2.jpg" alt="Team Photo 2"></div>
              <div class="gallery-item small-item"><img src="gallery-4.jpg" alt="Team Photo 4"></div>
            </div>
          </div>
          <div class="gallery-slide">
            <div class="side-images">
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/FFC0CB/000000?Text=Foto+5" alt="Team Photo 5"></div>
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/ADD8E6/000000?Text=Foto+7" alt="Team Photo 7"></div>
            </div>
            <div class="gallery-item main-item"><img
                src="https://via.placeholder.com/656x450/90EE90/000000?Text=Foto+Utama+2" alt="Main Photo 2"></div>
            <div class="side-images">
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/FFD700/000000?Text=Foto+6" alt="Team Photo 6"></div>
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/FFA07A/000000?Text=Foto+8" alt="Team Photo 8"></div>
            </div>
          </div>
          <div class="gallery-slide">
            <div class="side-images">
              <div class="gallery-item small-item">
                <img src="https://via.placeholder.com/268x195/DDA0DD/000000?Text=Foto+9" alt="Team Photo 9" />
              </div>
              <div class="gallery-item small-item">
                <img src="https://via.placeholder.com/268x195/87CEEB/000000?Text=Foto+11" alt="Team Photo 11">
              </div>
            </div>
            <div class="gallery-item main-item">
              <img src="https://via.placeholder.com/656x450/F0E68C/000000?Text=Foto+Utama+3" alt="Main Photo 3">
            </div>
            <div class="side-images">
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/E0FFFF/000000?Text=Foto+10" alt="Team Photo 10"></div>
              <div class="gallery-item small-item"><img
                  src="https://via.placeholder.com/268x195/FAFAD2/000000?Text=Foto+12" alt="Team Photo 12"></div>
            </div>
          </div>
        </div>

        <div class="slider-dots">
          <span class="active"></span>
          <span></span>
          <span></span>
        </div> --}}
      </section>
    </div>
  </main>
@endsection

@push('before-scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Script for Gallery Slider
      const dots = document.querySelectorAll('.slider-dots span');
      const slides = document.querySelectorAll('.gallery-slide');
      function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        if (slides[index] && dots[index]) {
          slides[index].classList.add('active');
          dots[index].classList.add('active');
        }
      }

      dots.forEach((dot, index) => {
        dot.addEventListener('click', () => showSlide(index));
      });

      if (slides.length > 0) {
        showSlide(0);
      }

      // === SCRIPT FOR ROLE FILTER SCROLLING (FINAL UPDATE) ===
      const filtersContainer = document.querySelector('.role-filters');
      const scrollRightBtn = document.querySelector('.arrow-btn.right');
      const scrollLeftBtn = document.querySelector('.arrow-btn.left');

      // Scroll Right
      if (scrollRightBtn) {
        scrollRightBtn.addEventListener('click', () => {
          filtersContainer.scrollBy({ left: 350, behavior: 'smooth' });
        });
      }

      // Scroll Left
      if (scrollLeftBtn) {
        scrollLeftBtn.addEventListener('click', () => {
          filtersContainer.scrollBy({ left: -350, behavior: 'smooth' });
        });
      }
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tabs = document.querySelectorAll(".tab-btn")
      const contents = document.querySelectorAll(".tab-content")
      const tabsRole = document.querySelectorAll(".role-tab")
      const cards = document.querySelectorAll(".wedding-card")
      // Definisikan container scroll di sini agar bisa diakses
      const filtersContainer = document.querySelector('.role-filters'); // <-- BARIS BARU (Pindah dari blok script atas jika ada)


      tabs.forEach(btn => {
        btn.addEventListener('click', (e) => {
          tabs.forEach(b => b.classList.remove('active'))
          contents.forEach(content => content.classList.add("hidden"))

          btn.classList.add("active")
          const target = btn.dataset.target
          console.log(target)
          document.getElementById(target).classList.remove("hidden")
        })
      })

      tabsRole.forEach(btn => {
        btn.addEventListener('click', () => {
          tabsRole.forEach(B => B.classList.remove("active"))
          cards.forEach(card => card.classList.remove("hidden"))
          btn.classList.add("active")
          const role = btn.dataset.role
          cards.forEach(card => {
            if (card.dataset.role === role) {
              card.classList.remove("hidden")
            } else {
              card.classList.add("hidden")
            }
          })
          console.log("test")

          // === LOGIKA AUTO-SCROLL SAAT TOMBOL DI-KLIK ===
          // 1. Hitung posisi untuk menengahkan tombol
          const containerWidth = filtersContainer.clientWidth;
          const buttonWidth = btn.offsetWidth;
          const buttonLeft = btn.offsetLeft; // Jarak tombol dari sisi kiri container

          // 2. Tentukan target scroll: (Posisi tombol) - (Setengah lebar container) + (Setengah lebar tombol)
          const targetScrollLeft = buttonLeft - (containerWidth / 2) + (buttonWidth / 2); // <-- BARIS BARU

          // 3. Lakukan scroll dengan mulus (smooth)
          filtersContainer.scrollTo({ // <-- BARIS BARU
            left: targetScrollLeft, // <-- BARIS BARU
            behavior: 'smooth' // <-- BARIS BARU
          }); // <-- BARIS BARU
          // ===============================================

        })
      })
    })
  </script>
@endpush