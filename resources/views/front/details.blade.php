@extends('front.layouts.app')
@section('content')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <a href="{{route('front.index')}}">
            <img src="{{asset('assets/icons/back.png')}}" alt="back">
          </a>
          <p class="text-center m-auto font-semibold">Details</p>
          <a href="">
            
          </a>
        </nav>
        <div id="image-details" class="px-4 flex flex-col gap-3">
          <div class="w-full h-[345px] flex shrink-0 rounded-xl overflow-hidden">
            <img id="image-thumbnail" src="{{Storage::url($package_tours->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
          </div>
          <div class="grid grid-cols-4 gap-4 w-fit mx-auto">
            <a href="{{Storage::url($package_tours->thumbnail)}}" class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden mx-auto border-blue">
              <img src="{{Storage::url($package_tours->thumbnail)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
            </a>
            @foreach($latestPhotos as $photo)
            <a href="{{Storage::url($photo->photo)}}" class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden mx-auto opacity-50">
              <img src="{{Storage::url($photo->photo)}}" class="w-full h-full object-cover object-center" alt="thumbnail">
            </a>
           @endforeach

          </div>
        </div>
        <div class="mx-4 flex flex-col gap-3 bg-white p-[16px_24px] rounded-[22px]">
          <h1 class="font-semibold">
            {{$package_tours->name}}
          </h1>
          <div class="flex justify-between gap-2">
            <div class="flex items-center gap-2">
              <div class="w-6 h-6 flex items-center shrink-0">
                <img src="{{asset('assets/icons/location-map.svg')}}" class="w-full h-full object-contain" alt="icon">
              </div>
              <div class="flex flex-col gap-1">
                <p class="text-sm leading-[22px] tracking-[0.35px] text-darkGrey">Location</p>
                <p class="font-semibold text-sm tracking-035">{{$package_tours->location}}</p>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mx-4 flex flex-col gap-3 bg-white p-[16px_24px] rounded-[22px]">
          <h2 class="font-semibold">About Package</h2>
          <p id="readMore" class="text-sm leading-[22px] tracking-035 text-darkGrey">
            {{substr($package_tours->about, 0, 100)}} 
            <button class="font-semibold text-blue" onclick="document.getElementById('readMore').classList.toggle('hidden'); document.getElementById('seeLess').classList.toggle('hidden');">Read More</button>
          </p>
          <p id="seeLess" class="hidden text-sm leading-[22px] tracking-035 text-darkGrey">
            {{$package_tours->about}}
            <button class="font-semibold text-blue" onclick="document.getElementById('readMore').classList.toggle('hidden'); document.getElementById('seeLess').classList.toggle('hidden');">See Less</button>
          </p>
        </div>
       
             
        <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-between px-6">
          <div class="flex flex-col justify-center gap-1">
            <p class="text-darkGrey text-sm tracking-035 leading-[22px]">Total Price</p>
            <p class="text-blue font-semibold text-lg leading-[26px] tracking-[0.6px]">Rp {{number_format($package_tours->price, 0, ',', '.')}}<span class="font-normal text-sx leading-[20px] tracking-035 text-darkGrey">/pack</span></p>
          </div>
          @auth
          @if(Auth::user()->hasRole('customer')) 
            {{-- <a href="{{route('front.book', $package_tours->slug)}}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>
            <a href="{{route('front.calendarbooking', )}}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a> --}}
            <a href="{{route('front.booking_request', )}}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>

          @endif
          @endauth
          @guest
          <a href="{{route('front.book', $package_tours->slug)}}" class="p-[16px_24px] rounded-xl bg-blue w-fit text-white hover:bg-[#06C755] transition-all duration-300">Book Now</a>
          @endguest
        </div>
    </section>
    @endsection
    
    @push('after-scripts')

    <script src="{{asset('js/details.js')}}"></script>
    @endpush