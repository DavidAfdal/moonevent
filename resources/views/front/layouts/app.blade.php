<!doctype html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('output.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/3.0.0/css/datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/3.0.0/js/datepicker.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
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

    @yield('content')

    @stack('before-scripts')
    @stack('after-scripts')




</body>
</html>
