@extends('front.layouts.app')

@push("styles")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush

@section('content')
    <section id="content" class=" w-full mx-auto bg-white min-h-screen flex flex-col  ">
        <x-hero-list-wedding :locations="$locations" :paxOptions="$paxOptions" :priceOptions="$priceOptions" />
        <div class="px-[20px] md:px-[65px] w-full h-[250px] my-8 relative">
            <img src="{{ asset('assets/thumbnails/wo9.jpg') }}" class="w-full h-full object-cover object-top rounded-xl"
                alt="">
            <div class="max-w-[620px] absolute top-0 px-10 py-6">
                <h2 class="text-4xl font-semibold text-white">Special Promo for Your Upcoming Event</h2>
                <p class="text-sm text-white my-4">
                    Enjoy exclusive discounts for wedding and event packages this month. Make your dream celebration
                    unforgettable at the best value
                </p>
                <a href="/"
                    class="flex items-center gap-5 w-fit border-2 border-white rounded-full px-2 py-1 group font-semibold transition-all duration-300 text-white">
                    Claim Offer
                    <i
                        class="fa-solid fa-arrow-right w-fit h-auto rounded-full flex-shrink-0 p-2 border border-white transition duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="px-[20px] md:px-[65px] w-full max-w-[1440px] mx-auto px-4">
            <div class="w-full flex flex-col md:flex-row items-center justify-between my-8">
                <h2 class="text-xl md:text-2xl text-center font-semibold">
                    Our Beautiful Wedding Moments
                </h2>
                <x-filter-tab-wedding :categories="$categories" />
            </div>

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4  gap-4 mt-5 md:mt-8">
                @foreach ($weddings as $wedding)
                    <x-card slug="{{$wedding->slug}}" image="{{Storage::url($wedding->thumbnail)}}"
                        category="{{$wedding->category->name}}" price="{{$wedding->price}}" title="{{$wedding->name}}"
                        pax="{{$wedding->pax}}" type="{{$wedding->category->name}}" location="{{$wedding->location}}" />
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
                    <img src="{{ asset('assets/thumbnails/rose-ring.png') }}" alt="Video Thumbnail"
                        class="w-full h-auto object-cover">

                    <!-- Tombol Play -->
                    <a @click.prevent="open = true" href="#" class="absolute inset-0 flex items-center justify-center z-10">
                        <div
                            class="bg-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg hover:scale-105 transition">
                            <svg class="w-6 h-6 text-orange-500 ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </a>

                    <!-- Modal -->
                    <div x-show="open" x-transition x-cloak
                        class="fixed inset-0 z-50 bg-black bg-opacity-70 flex items-center justify-center px-4">
                        <div class="bg-white rounded-lg overflow-hidden w-full max-w-2xl relative"
                            @click.outside="open = false">
                            <!-- Tombol Close -->
                            <button @click="open = false"
                                class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl font-bold">&times;</button>

                            <!-- Video Iframe Responsive -->
                            <div class="relative pt-[56.25%]">
                                <iframe class="absolute top-0 left-0 w-full h-full"
                                    src="https://www.youtube.com/embed/GtL1huin9EE" title="YouTube Video" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statistic Section -->
                <div class="grid grid-cols-2 md:grid-cols-4 text-center text-white gap-y-8">
                    <div>
                        <div class="text-2xl md:text-4xl font-bold">50+</div>
                        <div class="text-xl md:text-2xl">Room Only</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-4xl font-bold">100+</div>
                        <div class="text-xl md:text-2xl">Wedding</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-4xl font-bold">30+</div>
                        <div class="text-xl md:text-2xl">Vendor</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-4xl font-bold">3</div>
                        <div class="text-xl md:text-2xl">Locations</div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-16 bg-white px-[20px] md:px-[65px]">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-8">What Our Clients Say</h2>

            <div class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="rounded-xl mx-auto relative w-full max-h-[500px] cursor-pointer overflow-hidden group">
                    <img src="{{ asset('assets/thumbnails/wo10.jpg') }}" alt=""
                        class="w-full h-full object-cover rounded-3xl z-0 relative transition-all duration-500 ease-out group-hover:scale-105">

                    <div class="absolute inset-0 bg-black/30 rounded-3xl z-10"></div>

                    <div class="w-full px-5 py-5 text-white absolute bottom-0 rounded-b-3xl z-20">
                        <h2 class="text-base md:text-sm lg:text-2xl font-semibold mb-5">
                            "I've made lifelong friends here and wouldn't hesitate to recommend it to everyone."
                        </h2>
                        <p class="text-sm md:text-sm lg:text-base">Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="absolute top-10 px-5 z-20">
                        <a href=""
                            class="bg-white/70 text-black px-5 py-2 rounded-full group-hover:bg-[#FF7043]/70 group-hover:text-white transition-all duration-300 ease-in-out text-sm md:text-base">
                            <i class="fa-solid fa-play"></i> Play Video
                        </a>
                    </div>
                </div>
                <div class="rounded-xl mx-auto relative w-full max-h-[500px] cursor-pointer overflow-hidden group">
                    <img src="{{ asset('assets/thumbnails/wo8.JPG') }}" alt=""
                        class="w-full h-full object-cover rounded-3xl z-0 relative transition-all duration-500 ease-out group-hover:scale-105">

                    <div class="absolute inset-0 bg-black/30 rounded-3xl z-10"></div>

                    <div class="w-full px-5 py-5 text-white absolute bottom-0 rounded-b-3xl z-20">
                        <h2 class="text-base md:text-sm lg:text-2xl font-semibold mb-5">
                            "I've made lifelong friends here and wouldn't hesitate to recommend it to everyone."
                        </h2>
                        <p class="text-sm md:text-sm lg:text-base">Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="absolute top-10 px-5 z-20">
                        <a href=""
                            class="bg-white/70 text-black px-5 py-2 rounded-full group-hover:bg-[#FF7043]/70 group-hover:text-white transition-all duration-300 ease-in-out text-sm md:text-base">
                            <i class="fa-solid fa-play"></i> Play Video
                        </a>
                    </div>
                </div>
                <div class="rounded-xl mx-auto relative w-full max-h-[500px] cursor-pointer overflow-hidden group">
                    <img src="{{ asset('assets/thumbnails/wo.jpg') }}" alt=""
                        class="w-full h-full object-cover rounded-3xl z-0 relative transition-all duration-500 ease-out group-hover:scale-105">

                    <div class="absolute inset-0 bg-black/30 rounded-3xl z-10"></div>

                    <div class="w-full px-5 py-5 text-white absolute bottom-0 rounded-b-3xl z-20">
                        <h2 class="text-base md:text-sm lg:text-2xl font-semibold mb-5">
                            "I've made lifelong friends here and wouldn't hesitate to recommend it to everyone."
                        </h2>
                        <p class="text-sm md:text-sm lg:text-base">Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="absolute top-10 px-5 z-20">
                        <a href=""
                            class="bg-white/70 text-black px-5 py-2 rounded-full group-hover:bg-[#FF7043]/70 group-hover:text-white transition-all duration-300 ease-in-out text-sm md:text-base">
                            <i class="fa-solid fa-play"></i> Play Video
                        </a>
                    </div>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #f9741674;
            /* Tailwind: gray-200 */
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