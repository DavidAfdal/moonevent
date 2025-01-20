@extends('front.layouts.app')
@section('content')
    <section id="content" class="max-w-[640px] w-full mx-auto bg-[#F9F2EF] min-h-screen flex flex-col gap-8 pb-[120px]">
        <nav class="mt-8 px-4 w-full flex items-center justify-between">
          <div class="flex items-center gap-3">

            @auth
            <div class="w-12 h-12 border-4 border-white rounded-full overflow-hidden flex shrink-0 shadow-[6px_8px_20px_0_#00000008]">
              <img src="{{Storage::url(Auth::user()->avatar)}}" class="w-full h-full object-cover object-center" alt="photo">
            </div>
            <div class="flex flex-col gap-1">
              <p class="text-xs tracking-035">Welcome!</p>
              <p class="font-semibold">{{Auth::user()->name}}</p>
            </div>
            @endauth
            @guest
            <div class="w-12 h-12 border-4 border-white rounded-full overflow-hidden flex shrink-0 shadow-[6px_8px_20px_0_#00000008]">
                <img src="assets/logos/logo-moonevent.svg" class="w-full h-full object-cover object-center" alt="photo">
              </div>
              <div class="flex flex-col gap-1">
                <p class="text-xs tracking-035">Welcome!</p>
                <p class="font-semibold">Siap Menempuh hidup baru?</p>
              </div>
            @endguest
                
          </div>
          <a href="{{route('dashboard')}}">
            <div class="w-12 h-12 rounded-full bg-white overflow-hidden flex shrink-0 items-center justify-center shadow-[6px_8px_20px_0_#00000008]">
              <img src="assets/logos/logo-moonevent.svg" alt="icon">
            </div>
          </a>
        </nav>
        <div class="w-[calc(100%-5px)]  items-center justify-center rounded-[20px] overflow-hidden relative">
          <img src="assets/backgrounds/moonevent.jpg" class="w-full h-full object-contain" alt="background">
        </div>
        <h1 class="font-semibold text-2xl leading-[36px] text-center">Your Partner Event Solution</h1>
        <div id="categories" class="flex flex-col gap-3">
          <h2 class="font-semibold px-4">Categories</h2>
          <div class="main-carousel buttons-container">

            @forelse($categories as $category)
            <a href="{{route('front.category', $category->slug)}}" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
              <div class="p-3 flex items-center gap-2 rounded-[10px] border border-[#4D73FF] group-hover:bg-[#4D73FF] transition-all duration-300">
                <div class="w-6 h-6 flex shrink-0">
                  <img src="{{Storage::url($category->icon)}}" alt="icon">
                </div>
                <span class="text-sm tracking-[0.35px] text-[#4D73FF] group-hover:text-white transition-all duration-300">{{$category->name}}</span>
              </div>
            </a>
            @empty
            <p>Belum ada data kategori terbaru</p>
            @endforelse

          </div>
        </div>
        <div id="recommendations" class="flex flex-col gap-3">
          <h2 class="font-semibold px-4">Wedding Package Recommendation</h2>
          <div class="main-carousel card-container">
            {{-- live chat --}}
            <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="56d76d2e-7505-4643-a7d4-9e65ef83d7a5";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

            @forelse($package_tours as $tour)
            <a href="{{route('front.details', $tour->slug)}}" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
              <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
                <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                  <img src="{{Storage::url($tour->thumbnail)}}" class="w-full h-full object-cover" alt="thumbnails">
                </div>
                <div class="flex justify-between gap-2">
                  <div class="flex flex-col gap-1">
                    <p class="font-semibold two-lines">
                        {{$tour->name}}
                    </p>
                    <div class="flex items-center gap-1">
                      <div class="w-4 h-4 flex shrink-0">
                        <img src="assets/icons/location-map.svg" alt="icon">
                      </div>
                      <span class="text-sm text-darkGrey tracking-035">
                        {{$tour->location}}
                    </span>
                    </div>
                  </div>
                  <div class="flex flex-col gap-1 text-right">
                    <p class="text-sm leading-[21px]">
                      <span class="font-semibold text-[#4D73FF] text-nowrap">Rp {{number_format($tour->price, 0, ',', '.')}}</span><br>
                      <span class="text-darkGrey">/{{$tour->days}}</span>
                    </p>
                    <div class="flex items-center gap-1 justify-end">
                      <div class="w-4 h-4 flex shrink-0">
                        
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </a>
            @empty
            <p>Belum ada paket wedding terbaru</p>
            @endforelse


          </div>
        </div>
        <div id="recommendations" class="flex flex-col gap-3">
          <h2 class="font-semibold px-4">Our Vendor</h2>
        <div class="main-carousel card-container">
          

          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/DIAMOND.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/3LARAS.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/DOSHIN.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/SELERAUTAMA.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/AMARILIZ.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/ANDAYU.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/ANNISA.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/ARASKIAND.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/AUF.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/BOYZ.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/CATERINDO.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/GINTO.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/GLORYON.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/MEDIA .jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/NBS.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/NENDANG.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/NENDIA.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/PEGADAIAN .jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/PESONAALAMANDA.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/PURANDEWI.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/RUANG GARASI .jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>
          <a href="#" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{asset('assets/vendor/SIRIH GADING.jpg')}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
            </div>
          </a>



        </div>
        </div>
      
      <div class="container mx-auto text-center">
        <h2 class="font-semibold px-4 text-4xl mb-4">About us</h2>
        <h2 class="text-lg">
          Moonevent Organizer adalah perusahaan penyedia layanan jasa Wedding Organizer dan pengelola gedung JGU Auditorium yang terletak di Depok, Jawa Barat. Berdiri pada tanggal 26 Oktober 2020, kami berdedikasi untuk memberikan layanan terbaik dalam perencanaan acara dan penyewaan gedung.
        </h2>
      </div>
      <div class="team-section mx-auto text-center mt-8">
        <h2 class="font-semibold px-4 text-3xl mb-4">Our Admin Team</h2>
        <div class="team-members">
          <img src="{{ asset('assets/thumbnails/TIM FORMAL.jpg') }}" alt="Our Team" class="mx-auto">
        </div>
      </div>
      <div class="team-section mx-auto text-center mt-8">
        <h2 class="font-semibold px-4 text-3xl mb-4">Our WO Team</h2>
        <div class="team-members">
          <img src="{{ asset('assets/thumbnails/10 org.jpg') }}" alt="Our Team" class="mx-auto">
        </div>
      </div>
      
  
        <div id="explore" class="flex flex-col px-4 gap-3">
          <h2 class="font-semibold">More to Explore</h2>
          @forelse($package_tours_explore as $tour)
          <a href="{{route('front.details', $tour->slug)}}" class="group px-2 first-of-type:pl-4 last-of-type:pr-4">
            <div class="w-[288px] p-4 flex flex-col gap-3 rounded-[26px] bg-white shadow-[6px_8px_20px_0_#00000008]">
              <div class="w-full h-[330px] rounded-xl flex shrink-0 overflow-hidden">
                <img src="{{Storage::url($tour->thumbnail)}}" class="w-full h-full object-cover" alt="thumbnails">
              </div>
              <div class="flex justify-between gap-2">
                <div class="flex flex-col gap-1">
                  <p class="font-semibold two-lines">
                      {{$tour->name}}
                  </p>
                  <div class="flex items-center gap-1">
                    <div class="w-4 h-4 flex shrink-0">
                      <img src="assets/icons/location-map.svg" alt="icon">
                    </div>
                    <span class="text-sm text-darkGrey tracking-035">
                      {{$tour->location}}
                  </span>
                  </div>
                </div>
                <div class="flex flex-col gap-1 text-right">
                  <p class="text-sm leading-[21px]">
                    <span class="font-semibold text-[#4D73FF] text-nowrap">Rp {{number_format($tour->price, 0, ',', '.')}}</span><br>
                    <span class="text-darkGrey">/{{$tour->days}}</span>
                  </p>
                  <div class="flex items-center gap-1 justify-end">
                    <div class="w-4 h-4 flex shrink-0">
                      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </a>
          @empty
          <p>Belum ada paket wedding terbaru</p>
          @endforelse
        </div>
        <div class="navigation-bar fixed bottom-0 z-50 max-w-[640px] w-full h-[85px] bg-white rounded-t-[25px] flex items-center justify-evenly py-[45px]">
          <a href="" class="menu">
            <div class="flex flex-col justify-center w-fit gap-1">
              <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="assets/icons/home.svg" alt="icon">             
              </div>
              <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Home</p>
            </div>
          </a>
          
          <a href="{{route('dashboard.bookings')}}" class="menu opacity-25">
            <div class="flex flex-col justify-center w-fit gap-1">
              <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="assets/icons/calendar-blue.svg" alt="icon">              
              </div>
              <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Schedule</p>
            </div>
          </a>
          <a href="{{route('profile.edit')}}" class="menu opacity-25">
            <div class="flex flex-col justify-center w-fit gap-1">
              <div class="w-4 h-4 flex shrink-0 overflow-hidden mx-auto text-[#4D73FF]">
                <img src="assets/icons/user-flat.svg" alt="icon">               
              </div>
              <p class="font-semibold text-xs leading-[20px] tracking-[0.35px]">Profile</p>
            </div>
          </a>
        </div>
    </section>
@endsection

@push('after-scripts')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="{{asset('js/flickity-slider.js')}}"></script>
    <script src="{{asset('js/two-lines-text.js')}}"></script>
    @endpush
