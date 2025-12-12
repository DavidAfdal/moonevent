<!doctype html>
<html>

<head>
    <title>@yield('title', 'Moonevent – Event Organizer & Wedding Services')</title>
    <meta name="description" content="@yield('meta_description', 'Moonevent Organizer menyediakan layanan event, wedding organizer, dan penataan acara profesional untuk kebutuhan personal maupun corporate.')">

    {{-- Keywords (optional) --}}
    <meta name="keywords" content="@yield('meta_keywords', 'event organizer, wedding organizer, moonevent, eo, jasa event, jasa wedding, jasa acara')">

    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Canonical (hindari duplikasi URL) --}}
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logos/logo-moonevent.svg') }}">
    

    {{-- Open Graph for Facebook / WhatsApp --}}
    <meta property="og:title" content="@yield('og_title', 'Moonevent – Event Organizer Profesional')">
    <meta property="og:description" content="@yield('og_description', 'Layanan event organizer profesional untuk acara pernikahan, corporate, dan lainnya.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/backgrounds/moonevent.jpg'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">
    <meta property="og:type" content="website">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Moonevent – Event Organizer')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Jasa event & wedding organizer profesional.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/backgrounds/moonevent.jpg'))">

    {{-- Preload critical assets (optional speed boost) --}}
    <link rel="preload" href="{{ asset('output.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS -->
    @stack('head-scripts')

    @stack('styles')
    <style>
        .container {
            max-width: 400px;
            margin-top: 50px;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .confirm-btn {
            background-color: #4a90e2;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body class="font-poppins text-black">
    @if (!in_array(Route::currentRouteName(), ['login', 'register', 'front.reservation.check', 'front.history', 'front.reservation.check', 'dashboard.bookings']))
        <x-navbar />
    @endif
    @yield('content')
    @stack('before-scripts')
    @stack('after-scripts')
    @if (!in_array(Route::currentRouteName(), ['login', 'register', 'front.reservation.check', 'front.history', 'dashboard.bookings', 'profile']))
        <x-footer />
    @endif
</body>

</html>