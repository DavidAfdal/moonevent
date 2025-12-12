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
      /* PERBAIKAN 1: 
            Beri padding agar ada ruang untuk tombol panah.
          */
      padding: 0 50px;
      box-sizing: border-box;
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
      /* PERBAIKAN 2: Kurangi margin ini, karena padding sudah ada di container */
      margin-left: 10px;
    }

    .role-filters button:last-child {
      /* PERBAIKAN 3: Kurangi margin ini */
      margin-right: 10px;
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
      /* PERBAIKAN 4: Posisikan panah di dalam area padding container */
      left: 5px;
      padding-right: 3px;
      /* visual alignment for arrow */
    }

    .arrow-btn.right {
      /* PERBAIKAN 5: Posisikan panah di dalam area padding container */
      right: 5px;
      padding-left: 3px;
      /* visual alignment for arrow */
    }

    /* === CARD STYLING SECTION === */
    .team-member-card {
      position: relative;
      /* INI MASALAHNYA: Lebar dan tinggi tetap */
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
      /* INI JUGA MASALAH: Lebar dan tinggi tetap */
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
      /* INI JUGA MASALAH: Posisi pixel tetap */
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


    /* ============================================
         PENYESUAIAN RESPONSIVE (MOBILE)
        ============================================
        */

    @media (max-width: 768px) {

      .container-team {
        padding: 15px;
      }

      /* 1. Perbaiki Hero Section */
      .hero-section {
        padding: 60px 15px;
        /* Kurangi padding */
      }

      .hero-section h1 {
        font-size: 30px;
        /* Perkecil font dari 48px */
      }

      .hero-section p {
        font-size: 16px;
        /* Perkecil font dari 20px */
      }

      .hero-section .hero-content {
        padding: 20px;
        border-radius: 25px;
      }

      /* 2. Perbaiki Tabs Utama */
      .tabs {
        width: 100%;
        display: flex;
      }

      .tabs button {
        flex: 1;
        /* Buat tombol 'Wedding' dan 'Office' sama rata */
        padding: 15px 10px;
        font-size: 15px;
        text-align: center;
      }

      /* 3. Perbaiki Filter Role */
      .role-filters-container {
        padding: 0 45px;
        /* Sedikit kurangi padding panah di mobile */
      }

      /* 4. Perbaiki Card Tim (INI YANG UTAMA) */
      .team-member-card {
        width: 90%;
        /* Ganti dari 360.43px menjadi persentase */
        max-width: 350px;
        /* Batas atas agar tidak terlalu besar */
        height: auto;
        /* GANTI DARI 543px MENJADI OTOMATIS */
        margin-left: auto;
        /* Pusatkan card */
        margin-right: auto;
        /* Pusatkan card */
        margin-top: 25px;
        padding: 20px;
        /* Sedikit kurangi padding di mobile */
      }

      /* 5. Perbaiki Kontainer Gambar di dalam Card */
      .card-image-container {
        width: 100%;
        /* Ganti dari 269px menjadi 100% (penuh) */
        height: auto;
        /* Biarkan tinggi otomatis */
        aspect-ratio: 3 / 4;
        /* Jaga rasio gambar 3:4 */
        border-radius: 0 20px 0 20px;
      }

      /* 6. Perbaiki Posisi Ikon 'Love' */
      .icon-love {
        position: absolute;
        top: auto;    /* Hapus 'top: 435px' */
        bottom: 45px; /* Posisikan 60px dari Bawah card */
        left: 10px;   /* Sesuaikan 'left: 35px' */
        width: 160px; /* Mungkin perkecil sedikit */
      }

      /* 7. Perbaiki info text */
      .team-member-card .info {
        padding: 10px 0 0 0;
        /* Sesuaikan padding info */
        text-align: left;
      }

      .member-name {
        font-size: 18px; /* Perkecil sedikit font */
        padding-left: 15px; /* Kurangi padding */
        margin-bottom: 10px;
      }

      .member-aka {
        font-size: 15px;
        /* Perkecil sedikit font */
        padding-left: 15px;
      }

      /* 8. Perbaiki Tampilan Grid (untuk Team Office & Wedding) */
      /* Ini akan menumpuk card jadi 1 kolom di mobile */
      .grid.grid-cols-1,
      .grid.md\:grid-cols-2,
      .grid.lg\:grid-cols-3,
      .grid.md\:grid-cols-3 {
        grid-template-columns: 1fr;
      }
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
              'aka' => 'Muna',
              'role' => 'Event Coordinator',
              'photo' => asset('assets/orang/ibu-munah.png')
            ],
            [
              'name' => 'Lusy Destiani',
              'aka' => 'Lusy',
              'role' => 'Bride, Grooms, & Family',
              'photo' => asset('assets/orang/tante-lucy.png')
            ],
            [
              'name' => 'Edi Kurniawan',
              'aka' => 'Edi',
              'role' => 'Facility Support',
              'photo' => asset('assets/orang/om_edi.png')
            ],
            [
              'name' => 'Kusumawardhana H.S',
              'aka' => 'Kusuma',
              'role' => 'Event Supervisor',
              'photo' => asset('assets/orang/aa_dhana.png')
            ],
            [
              'name' => 'Dias Hafizhan',
              'aka' => 'Dias',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/abang-dias.jpg')
            ],
            [
              'name' => 'Naura Nisrina',
              'aka' => 'Naura',
              'role' => 'Bride, Grooms, & Family',
              'photo' => asset('assets/orang/aura.jpg')
            ],
            [
              'name' => 'Risma Nurdiyani',
              'aka' => 'Risma',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/Risma.jpg')
            ],
            [
              'name' => 'Aulia Rahmi',
              'aka' => 'Aulia',
              'role' => 'Food & Beverage',
              'photo' => asset('assets/orang/aulia.jpg')
            ],
            [
              'name' => 'Masdian Hafizh',
              'aka' => 'Masdian',
              'role' => 'Food & Beverage',
              'photo' => asset('assets/orang/masdian.jpg')
            ],
            [
              'name' => 'Ayu Puspita Ningrum',
              'aka' => 'Ayu',
              'role' => 'Food & Beverage',
              'photo' => asset('assets/orang/ibu-ayu.jpg')
            ],
            [
              'name' => 'Bintang Faith Hamam',
              'aka' => 'Hamam',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/hamam.jpg')
            ],
            [
              'name' => 'Kusumadirangga H.S',
              'aka' => 'Rangga',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/Rangga.jpg')
            ],
            [
              'name' => 'Arsya Rivaldo',
              'aka' => 'Arsya',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/arsya.jpg')
            ],
            [
              'name' => 'M. Iqbal Hidayat',
              'aka' => 'Iqbal',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/iqbal.jpg')
            ],
            [
              'name' => 'Muhammad Reza',
              'aka' => 'Reza',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/Muhammad-Reza.jpg')
            ],
            [
              'name' => 'Ade Dwi Putra',
              'aka' => 'Putra',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/putra.jpg')
            ],
            [
              'name' => 'Agung maulana',
              'aka' => 'Agung',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/agung.jpg')
            ],
            [
              'name' => 'Fazilla',
              'aka' => 'Ila',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/ila.jpg')
            ],
            [
              'name' => 'Muhammad Fadhshifa',
              'aka' => 'Ifad',
              'role' => 'Front Line',
              'photo' => asset('assets/orang/ifad.jpg')
            ],
            [
              'name' => 'Mirza Fahtur',
              'aka' => 'Fathur',
              'role' => 'Photograph',
              'photo' => asset('assets/orang/fathur.jpg')
            ],
            [
              'name' => 'Fadly Firdaus',
              'aka' => 'Fadli',
              'role' => 'VIP Management',
              'photo' => asset('assets/orang/Fadly.jpg')
            ],
            [
              'name' => 'Indira Zahra Putri',
              'aka' => 'Indira',
              'role' => 'Event Supervisor', 'Bride, Grooms, & Family',
              'photo' => asset('assets/orang/rara.jpg')
            ],
          ];

          $teamOffice = [
            [
              'name' => 'Munahwati',
              'aka' => 'Muna',
              'role' => 'President Director',
              'photo' => asset('assets/orang/ibu-munah.png')
            ],
            [
              'name' => 'Lusy Destiani',
              'aka' => 'Lusy',
              'role' => 'Head Of Operational',
              'photo' => asset('assets/orang/tante-lucy.png')
            ],
            [
              'name' => 'Edi Kurniawan',
              'aka' => 'Edi',
              'role' => 'Head Of Banquet',
              'photo' => asset('assets/orang/om_edi.png')
            ],
            [
              'name' => 'Kusumawardhana H.S',
              'aka' => 'Kusuma',
              'role' => 'Head Of Event & IT',
              'photo' => asset('assets/orang/aa_dhana.png')
            ],
            [
              'name' => 'Susiyana',
              'aka' => 'Susy',
              'role' => 'Finance & Tax',
              'photo' => asset('assets/orang/susy.jpg')
            ],
            [
              'name' => 'Naura Nisrina',
              'aka' => 'Naura',
              'role' => 'Public Relation & Secretary',
              'photo' => asset('assets/orang/kak-naura.jpg')
            ],
            [
              'name' => 'Ayu Puspita Ningrum',
              'aka' => 'Ayu',
              'role' => 'Event Support',
              'photo' => asset('assets/orang/ibu-ayu.jpg')
            ],
            [
              'name' => 'Masdian Hafizh',
              'aka' => 'Masdian',
              'role' => 'Banquet',
              'photo' => asset('assets/orang/masdian.jpg')
            ],
            [
              'name' => 'Fadhilah',
              'aka' => 'Fadhilah',
              'role' => 'Banquet',
              'photo' => asset('assets/orang/Fadhilah.png')
            ],
            [
              'name' => 'Kusumadirangga H.S',
              'aka' => 'Rangga',
              'role' => 'Event & IT Support',
              'photo' => asset('assets/orang/Rangga.jpg')
            ],
            [
              'name' => 'David Afdal Kaizar',
              'aka' => 'David',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/bung-david.jpg')
            ],
            [
              'name' => 'Dias Hafizhan',
              'aka' => 'Dias',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/abang-dias.jpg')
            ],
            [
              'name' => 'I Kadek Andika D.P',
              'aka' => 'Kadek',
              'role' => 'Tim IT',
              'photo' => asset('assets/orang/bung-kadek.jpg')
            ],
          ];
        @endphp

        {{-- office secttion --}}
        {{-- office section (ORG CHART) --}}
        <div class="tab-content hidden" id="office">
          @php
            // Pisahkan role
            $director = null;
            $tier1 = [];
            $others = [];

            foreach ($teamOffice as $m) {
              if ($m['role'] === 'President Director') {
                $director = $m;
              } else {
                $others[] = $m;
              }
            }

             // Role prioritas
          $priority = ['Head Of Operational', 'Head Of Banquet', 'Head Of Event and IT'];

          // Lakukan stable sort: 3 role pertama di depan, lainnya tetap urutan asli
          usort($others, function ($a, $b) use ($priority) {

              $indexA = array_search($a['role'], $priority);
              $indexB = array_search($b['role'], $priority);

              $aIsPriority = $indexA !== false;
              $bIsPriority = $indexB !== false;

              // Jika dua2nya adalah role prioritas — sort by priority order
              if ($aIsPriority && $bIsPriority) {
                  return $indexA <=> $indexB;
              }

              // Jika hanya A yang prioritas → A di depan
              if ($aIsPriority) return -1;

              // Jika hanya B yang prioritas → B di depan
              if ($bIsPriority) return 1;

              // Jika dua2nya bukan prioritas → JANGAN diubah urutannya
              return 0; // penting: biar stable (tidak merusak urutan asli)
          });
          @endphp

          {{-- TOP: President Director di tengah --}}
          @if ($director)
            <div class="w-full flex justify-center mb-8">
              <div class="w-full max-w-[360px]">
                <p class="font-bold text-lg mb-2 text-center">{{ $director['role'] }}</p>
                <div class="mx-auto w-24 h-[2px] bg-black"></div>
                <div class="team-member-card mx-auto">
                  <div class="card-image-container">
                    <img src="{{ $director['photo'] }}" alt="Foto {{ $director['name'] }}">
                  </div>
                  <div class="info">
                    <span class="member-name ">{{ $director['name'] }}</span>
                    <img src="{{ asset('assets/iconcard/love.png') }}" class="icon-love" alt="divider icon">
                    <p class="member-aka">A.K.A {{ $director['aka'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endif

          {{-- ROW 2: 3 posisi sejajar (Sales, Banquet, Supervisor) --}}
{{-- <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-3 gap-4 w-full">
    @foreach ($tier1 as $i => $member)
        <div 
            class="
                w-full
                @if ($loop->iteration === 1 || $loop->iteration === 2)
                        md:col-span-2  lg:col-span-1
                @endif
                @if ($loop->iteration === 3)
                        md:col-start-2  md:col-end-4 lg:col-start-auto lg:col-span-1
                @endif
            "
        >
            <p class="
              w-full
              text-center 
              font-bold 
              text-lg mb-2 
               @if ($loop->iteration === 3)
                  md:text-center
               @else
                  md:text-left
               @endif
              
            ">
              {{ $member['role'] }}
            </p>

            <div 
            class="
                w-24 mx-auto 
                @if ($loop->iteration === 3)
                       md:w-full md:mx-auto 
                @else
                       md:w-[calc(100%-20px)]
                @endif
                h-[2px] bg-black
            ">

            </div>

            <div class="team-member-card">
                <div class="card-image-container">
                    <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}">
                </div>
                <div class="info">
                    <span class="member-name">{{ $member['name'] }}</span>
                    <img src="{{ asset('assets/iconcard/love.png') }}" class="icon-love">
                    <p class="member-aka">A.K.A {{ $member['aka'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}




          {{-- Sisanya tampil biasa di bawah --}}
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-7 w-full">
            @foreach ($others as $member)
              <div class="w-full">
                <p class="text-center font-bold text-lg mb-2 md:text-left">{{ $member['role'] }}</p>
                <div class="w-24 mx-auto md:w-[calc(100%-20px)] h-[2px] bg-black"></div>
                <div class="team-member-card">
                  <div class="card-image-container">
                    <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}">
                  </div>
                  <div class="info">
                    <span class="member-name ">{{ $member['name'] }}</span>
                    <img src="{{ asset('assets/iconcard/love.png') }}" class="icon-love" alt="divider icon">
                    <p class="member-aka">A.K.A {{ $member['aka'] }}</p>
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
              <button class="role-tab" data-role="Bride, Grooms, & Family">Bride, Grooms, & Family</button>
              <button class="role-tab" data-role="VIP Management">VIP Management</button>
              <button class="role-tab" data-role="Food & Beverage">Food & Beverage</button>
              <button class="role-tab" data-role="Front Line">Front Line</button>
              <button class="role-tab" data-role="Photograph">Photograph</button>
            </div>
            <button class="arrow-btn right">&rsaquo;</button>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2 md:gap-4 lg:gap-7">
            @foreach ($teamWeddingOrganizer as $member)
                  <div class="team-member-card w-[290px] md:w-[360.43px] h-[400px] md:h-[543px] wedding-card"
                    data-role="{{ $member['role'] }}">
                    <div class="card-image-container w-[250px] md:w-[269px] h-[280px] md:h-[363px]">
                      <img src="{{ $member['photo'] }}" alt="Foto {{ $member['name'] }}">
                    </div>
                    <div class="info">
                      <span class="member-name">{{ $member['name'] }}</span>
                      <img src="{{asset('assets/iconcard/love.png')}}" class="icon-love top-[320px] md:top-[435px] left-[10px] md:left-[35px]" alt="divider icon">
                      <p class="member-aka">A.K.A {{ $member['aka'] }}</p>
                    </div>
                  </div>
            @endforeach
          </div>

        </div>
        {{-- end wedding section --}}

      </section>

      {{--
      <hr class="section-divider">

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