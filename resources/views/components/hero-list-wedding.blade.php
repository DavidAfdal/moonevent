@props([
    'locations' => [],
    'paxOptions' => [],
    'priceOptions' => []
])

<div class="relative bg-cover bg-center h-[700px] md:max-h-[990px] lg:max-h-[990px] flex items-center justify-center text-white"
<div class="relative bg-cover bg-center min-h-[85vh] flex items-center justify-center text-white"
         style="background-image: url('/assets/backgrounds/hero-wedding-list.png');">
         {{-- {{ asset('images/hero-background.jpg') }} --}}
    <div class="absolute inset-0 bg-[#232323] bg-opacity-60"></div> {{-- dark overlay --}}
    
    <div class="relative z-10 px-4 sm:px-6">
      
        <h1 class="text-3xl md:text-3xl lg:text-5xl text-center md:text-center lgtext-left font-bold leading-tight mt-10">
             <span class="text-orange-500">Your Event</span> Starts Here<br>
            Crafted by <span class="text-orange-500">Moon Event Organizer</span>
        </h1>
        <p class="mt-4 text-sm text-center sm:text-xl lg:text-left text-gray-200">
           Your Partner Event Solution
        </p>
        <div class="max-w-4xl mx-auto">

  <form method="GET"
    class="bg-white shadow-lg rounded-xl mt-8 p-6 flex flex-col gap-6 w-full max-w-5xl mx-auto">

    @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif

    {{-- FILTERS BARIS ATAS --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 items-center gap-3">

        {{-- Location --}}
        <div class="">
            <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Select Location</label>
            <div class="flex items-center border rounded-md px-3 py-2 bg-white">
                <span class="text-gray-500 mr-2">📍</span>
                <select name="location" id="location" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                    <option value="">Select Location</option>
                    @foreach($locations as $loc)
                        @php
                            $slug = strtolower(str_replace(' ', '-', $loc));
                        @endphp
                        <option value="{{ $slug }}" {{ request('location') == $slug ? 'selected' : '' }}>
                            {{ $loc }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Price (lebih lebar) --}}
        <div class="md:col-span-1 lg:col-span-2" >
            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <div class="flex items-center border rounded-md px-3 py-2 bg-white">
                <span class="text-gray-500 mr-2">💰</span>
                <select name="price" id="price" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                    <option value="">Select Price Range</option>
                    @foreach($priceOptions as $p)
                        <option value="{{ $p['value'] }}" {{ request('price') == $p['value'] ? 'selected' : '' }}>
                            {{ $p['label'] }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- Pax --}}
        <div class="">
            <label for="pax" class="block text-sm font-medium text-gray-700 mb-1">Pax</label>
            <div class="flex items-center border rounded-md px-3 py-2 bg-white">
                <span class="text-gray-500 mr-2">👥</span>
                <select name="pax" id="pax" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                    <option value="">Select Pax</option>
                    @foreach($paxOptions as $pax)
                        <option value="{{ $pax }}" {{ request('pax') == $pax ? 'selected' : '' }}>
                            {{ $pax }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>

    {{-- BUTTONS BARIS BAWAH --}}
    <div class="flex justify-end gap-4">
        <button type="submit"
            class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition-all text-sm font-medium">
            Search
        </button>
        <a href="{{ url()->current() }}"
            class="bg-gray-200 text-gray-800 px-6 py-2 rounded-md hover:bg-gray-300 transition-all text-sm font-medium text-center">
            Reset
        </a>
    </div>

</form>


        </div>
    </div>
</div>