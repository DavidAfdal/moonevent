<!doctype html>
<html>

<head>
    <title>@yield('title', 'Moonevent')</title>
      <link rel="icon" type="image/png" href="{{ asset('assets/logos/logo-moonevent.svg') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('output.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/3.0.0/css/datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/3.0.0/js/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


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