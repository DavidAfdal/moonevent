{{-- @extends('front.layouts.app')
@section('content')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <a href="{{route('front.index')}}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="text-center m-auto font-semibold">Booking</p>
          <div class="max-w-[400px] mt-12 border border-gray-300 rounded-lg p-5 shadow-lg">
            <button class="bg-[#4a90e2] text-white w-full py-2 rounded-md border-none">
                Confirm
            </button>
        </div>
    <div class="container">
        <h4 class="text-center mb-4">Detail Wedding Package</h4>
        <form method="POST" action="">
            @csrf
            <!-- Venue -->
            <div class="mb-3">
                <label class="form-label">Venue</label>
                <select class="form-select" name="venue">
                    <option value="venue1">Grand Ballroom</option>
                    <option value="venue2">Outdoor Garden</option>
                    <option value="venue3">Beachside</option>
                </select>
            </div>
            
            <!-- Catering -->
            <div class="mb-3">
                <label class="form-label">Catering</label>
                <select class="form-select" name="catering">
                    <option value="diamond" selected>Diamond Catering</option>
                    <option value="nendang">Nendang Rasa</option>
                    <option value="caterindo">Caterindo</option>
                </select>
            </div>
            
            <!-- Decoration -->
            <div class="mb-3">
                <label class="form-label">Decoration</label>
                <select class="form-select" name="decoration">
                    <option value="modern">Modern</option>
                    <option value="classic">Classic</option>
                    <option value="rustic">Rustic</option>
                </select>
            </div>
            
            <!-- Fashion Styling and Makeup -->
            <div class="mb-3">
                <label class="form-label">Fashion Styling and Makeup</label>
                <select class="form-select" name="fashion_makeup">
                    <option value="simple">Simple</option>
                    <option value="elegant">Elegant</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            
            <!-- MC -->
            <div class="mb-3">
                <label class="form-label">MC</label>
                <select class="form-select" name="mc">
                    <option value="professional">Professional</option>
                    <option value="casual">Casual</option>
                    <option value="bilingual">Bilingual</option>
                </select>
            </div>
            
            <!-- Entertainment -->
            <div class="mb-3">
                <label class="form-label">Entertainment</label>
                <select class="form-select" name="entertainment">
                    <option value="band">Live Band</option>
                    <option value="dj">DJ Performance</option>
                    <option value="acoustic">Acoustic</option>
                </select>
            </div>
            
            <!-- Photography -->
            <div class="mb-3">
                <label class="form-label">Photography</label>
                <select class="form-select" name="photography">
                    <option value="traditional">Traditional</option>
                    <option value="candid">Candid</option>
                    <option value="cinematic">Cinematic</option>
                </select>
            </div>
            
            <!-- Confirm Button -->
            <button type="submit" class="confirm-btn">Confirm</button>
        </form>
    </div>

</nav>
<a href="" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}

    {{-- @push('after-scripts')
    <script src="{{asset('js/details.js')}}"></script>
    @endpush --}} 

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Package</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
<body>
    <div class="container">
        <h4 class="text-center mb-4">Detail Wedding Package</h4>
        <form>
            <!-- Venue -->
            <div class="mb-3">
                <label class="form-label">Venue</label>
                <select class="form-select" name="venue">
                    <option value="venue1">Grand Ballroom</option>
                    <option value="venue2">Outdoor Garden</option>
                    <option value="venue3">Beachside</option>
                </select>
            </div>
            
            <!-- Catering -->
            <div class="mb-3">
                <label class="form-label">Catering</label>
                <select class="form-select" name="catering">
                    <option value="diamond" selected>Diamond Catering</option>
                    <option value="nendang">Nendang Rasa</option>
                    <option value="caterindo">Caterindo</option>
                </select>
            </div>
            
            <!-- Decoration -->
            <div class="mb-3">
                <label class="form-label">Decoration</label>
                <select class="form-select" name="decoration">
                    <option value="modern">Modern</option>
                    <option value="classic">Classic</option>
                    <option value="rustic">Rustic</option>
                </select>
            </div>
            
            <!-- Fashion Styling and Makeup -->
            <div class="mb-3">
                <label class="form-label">Fashion Styling and Makeup</label>
                <select class="form-select" name="fashion_makeup">
                    <option value="simple">Simple</option>
                    <option value="elegant">Elegant</option>
                    <option value="luxury">Luxury</option>
                </select>
            </div>
            
            <!-- MC -->
            <div class="mb-3">
                <label class="form-label">MC</label>
                <select class="form-select" name="mc">
                    <option value="professional">Professional</option>
                    <option value="casual">Casual</option>
                    <option value="bilingual">Bilingual</option>
                </select>
            </div>
            
            <!-- Entertainment -->
            <div class="mb-3">
                <label class="form-label">Entertainment</label>
                <select class="form-select" name="entertainment">
                    <option value="band">Live Band</option>
                    <option value="dj">DJ Performance</option>
                    <option value="acoustic">Acoustic</option>
                </select>
            </div>
            
            <!-- Photography -->
            <div class="mb-3">
                <label class="form-label">Photography</label>
                <select class="form-select" name="photography">
                    <option value="traditional">Traditional</option>
                    <option value="candid">Candid</option>
                    <option value="cinematic">Cinematic</option>
                </select>
            </div>
            
            <!-- Confirm Button -->
            <button type="submit" class="confirm-btn">Confirm</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
