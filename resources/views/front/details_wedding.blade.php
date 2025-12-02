@extends('front.layouts.app')


@push("style")
<style>
    .markdown-content ul {
        list-style: disc !important;
        margin-left: 1.5rem !important;
    }
    .markdown-content li {
        margin-bottom: 4px;
    }
</style>
@endpush
@section('content')
<section class="max-w-[1440px] mx-auto px-4 py-10 mt-20" >
  <div class="grid md:grid-cols-2 gap-6" x-data="{ tab: 'crew' }">
    <div>
        <div class="max-w-[400px] max-h-[400px] mx-auto rounded-lg overflow-hidden">
            <img id="image-thumbnail" src="{{ Storage::url($package_tours->thumbnail) }}" alt="Main Wedding" class="object-cover w-full h-full">
        </div>

        <div class="flex space-x-2 mt-4 w-full justify-center">
            <a href="{{ Storage::url($package_tours->thumbnail) }}"
                class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden opacity-50 hover:opacity-100 transition-all duration-200 ease-in-out">
                <img src="{{ Storage::url($package_tours->thumbnail) }}" class="w-full h-full object-cover object-center" alt="thumbnail">
            </a>
            @foreach($latestPhotos as $photo)
            <a href="{{ Storage::url($photo->photo) }}"
                class="thumbnail-option w-[74px] h-[74px] flex shrink-0 rounded-xl border-2 overflow-hidden opacity-50 hover:opacity-100 transition-all duration-200 ease-in-out">
                <img src="{{ Storage::url($photo->photo) }}" class="w-full h-full object-cover object-center" alt="thumbnail">
            </a>
            @endforeach
        </div>
    </div>

    <div>
      <p class="text-lg text-gray-500">{{$package_tours->category->name}}</p>
      <h1 class="text-2xl lg:text-4xl text-justify text-gray-800  font-bold my-2">{{$package_tours->name}}</h1>
      <p class="text-sm text-gray-500 mt-1"><i class="fa fa-map-marker-alt text-red-500 mr-1"></i>{{$package_tours->location}}</p>
      @if ($package_tours->pax)
        <p class="text-sm text-gray-500 mt-4">Total Invited Guests</p>
        <div class="flex items-center space-x-2 mt-4">
          <span class="bg-[#FF704380] text-white px-3 py-1 rounded-ee-2xl rounded-ss-2xl border border-orange-500 text-sm font-semibold">{{$package_tours->pax}} Pax</span>
        </div>
      @endif
      <p class="text-2xl lg:text-4xl text-justify font-bold text-black mt-4">Rp. {{number_format($package_tours->price, 0, ',', '.')}}</p>

      <a href="{{route('front.book_test', $package_tours->slug)}}">
        <div class="w-full mt-6 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-6 rounded transition text-center">
          Book Now
        </div>
      </a>
      <!-- Tabs -->
      <div class="mt-8">
        <div class="flex space-x-4 border-b">
          @if ($package_tours->general_information)
                 <button @click="tab = 'info'" :class="tab === 'info' ? 'text-orange-500 border-orange-500' : 'text-gray-500 hover:text-gray-700'"
                  class="border-b-2 py-2 px-4 font-semibold">General Information</button>
          @endif
          @if ($package_tours->legal_services)
             <button @click="tab = 'kua'" :class="tab === 'kua' ? 'text-orange-500 border-orange-500' : 'text-gray-500 hover:text-gray-700'"
                  class="border-b-2 py-2 px-4 font-semibold">KUA Legal Services</button>
          @endif
          @if ($package_tours->event_crew)
             <button @click="tab = 'crew'" :class="tab === 'crew' ? 'text-orange-500 border-orange-500' : 'text-gray-500 hover:text-gray-700'"
                  class="border-b-2 py-2 px-4 font-semibold">Our Event Crew</button>
          @endif
        </div>

        <!-- Tab Content -->
        <div class="mt-4 text-gray-700 space-y-2 text-sm leading-relaxed">

          @if ($package_tours->general_information)
              <div x-show="tab === 'info'" x-transition>
                {!! str($package_tours->general_information)->markdown()->sanitizeHtml() !!}
              </div>
          @endif

          @if ($package_tours->legal_services)
               <div x-show="tab === 'kua'" x-transition class="markdown-content">
                 {!! str($package_tours->legal_services)->markdown()->sanitizeHtml() !!}
               </div>
          @endif

          @if ($package_tours->event_crew)
                <div x-show="tab === 'crew'" x-transition>
                   {!! str($package_tours->event_crew)->markdown()->sanitizeHtml() !!}
                </div>
          @endif
         
        </div>
      </div>
      
    </div>
  </div>

  <div class="mt-20">
    <h2 class="text-2xl font-semibold mb-8">Trusted Recommendation</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-2 mt-2 px-4">
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
  </div>
</section>
@endsection

@push('after-scripts')  
    <script src="{{asset('js/details.js')}}"></script>
@endpush