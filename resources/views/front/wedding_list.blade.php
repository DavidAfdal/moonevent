@extends('front.layouts.app')

@section('content')
<section id="content" class=" w-full mx-auto bg-white min-h-screen flex flex-col pb-[120px] ">
    <x-hero-list-wedding/>
    
    <div class="w-full max-w-[1440px] mx-auto px-4">
        <div class="w-full flex flex-col md:flex-row items-center justify-between mt-8 ">
            <h2 class="text-2xl font-semibold">
                Our Beautiful Wedding Moments
            </h2>
            <x-filter-tab-wedding :categories="$categories"/>
        </div>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  gap-4 mt-8">
            @foreach ($weddings as $wedding)
                <x-card
                    slug="{{$wedding->slug}}"
                    image="{{Storage::url($wedding->thumbnail)}}"
                    category="{{$wedding->category->name}}"
                    price="{{$wedding->price}}"
                    title="{{$wedding->name}}"
                    pax="{{$wedding->pax}}"
                    type="{{$wedding->category->name}}"
                    location="{{$wedding->location}}"
                />
            @endforeach
        </div>
        
        <div class="mt-8">
            {{ $weddings->links('vendor.pagination.tailwind') }}
        </div>
    </div>

   <div class="bg-[#FF7043] py-12 mt-40">
        <div class="w-full lg:max-w-[50%] mx-auto px-4">
            <div x-data="{ open: false }" class="relative rounded-lg overflow-hidden mb-10 -mt-40">
                <!-- Thumbnail -->
                <img src="{{ asset('assets/thumbnails/rose-ring.png') }}" alt="Video Thumbnail" class="w-full h-auto object-cover">

                <!-- Tombol Play -->
                <a @click.prevent="open = true" href="#"
                class="absolute inset-0 flex items-center justify-center z-10">
                    <div class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg hover:scale-105 transition">
                        <svg class="w-6 h-6 text-orange-500 ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </a>

                <!-- Modal -->
                <div x-show="open" x-transition x-cloak class="fixed inset-0 z-50 bg-black bg-opacity-70 flex items-center justify-center px-4">
                    <div class="bg-white rounded-lg overflow-hidden w-full max-w-2xl relative"  @click.outside="open = false">
                        <!-- Tombol Close -->
                        <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl font-bold">&times;</button>

                        <!-- Video Iframe Responsive -->
                        <div class="relative pt-[56.25%]">
                            <iframe class="absolute top-0 left-0 w-full h-full"
                                    src="https://www.youtube.com/embed/GtL1huin9EE"
                                    title="YouTube Video"
                                    frameborder="0"
                                    allow="autoplay; encrypted-media"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistic Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 text-center text-white gap-y-8">
                <div>
                    <div class="text-2xl md:text-4xl font-bold">1.245</div>
                    <div class="text-xl md:text-2xl">Happy Couple</div>
                </div>
                <div>
                    <div class="text-2xl md:text-4xl font-bold">946</div>
                    <div class="text-xl md:text-2xl">Wedding</div>
                </div>
                <div>
                    <div class="text-2xl md:text-4xl font-bold">156</div>
                    <div class="text-xl md:text-2xl">Vendor</div>
                </div>
                <div>
                    <div class="text-2xl md:text-4xl font-bold">35+</div>
                    <div class="text-xl md:text-2xl">Locations</div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-16 bg-white text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-8">What Our Clients Say</h2>

        {{-- Swiper Container --}}
        <div class="md:max-w-[1440px] mx-auto h-full">
            <div class="swiper px-4 min-h-[240px]">
                <div class="swiper-wrapper">
    
                    {{-- Slide 1 --}}
                    <div class="swiper-slide">
                        <x-testimonial-card
                            name="Robert Fox"
                            date="March 23, 2025"
                            avatar="{{ asset('images/avatars/robert.jpg') }}"
                            message="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        />
                    </div>
    
                    {{-- Slide 2 --}}
                    <div class="swiper-slide">
                        <x-testimonial-card
                            name="Cody Fisher"
                            date="August 7, 2023"
                            avatar="{{ asset('images/avatars/cody.jpg') }}"
                            message="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        />
                    </div>
    
                    {{-- Slide 3 --}}
                    <div class="swiper-slide">
                        <x-testimonial-card
                            name="Floyd Miles"
                            date="August 2, 2024"
                            avatar="{{ asset('images/avatars/floyd.jpg') }}"
                            message="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        />
                    </div>
                    
                </div>
    
                {{-- Pagination Dots --}}
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

</section>


@endsection

@push('head-scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        spaceBetween: 20,
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        }
        });
    });
    </script>
@endpush

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <style>
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background: #f9741674; /* Tailwind: gray-200 */
        opacity: 1;
        margin: 0 4px !important;
        transition: all 0.3s;
        margin-top: 200px;
    }

    .swiper-pagination-bullet-active {
        background-color: #f97316 !important; 
        transform: scale(1.2);
    }
  </style>
@endpush