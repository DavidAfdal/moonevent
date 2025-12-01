<div class="relative bg-cover bg-center min-h-[85vh] flex items-center justify-center text-white"
         style="background-image: url('/assets/backgrounds/hero-wedding-list.png');">
         {{-- {{ asset('images/hero-background.jpg') }} --}}
    <div class="absolute inset-0 bg-[#232323] bg-opacity-60"></div> {{-- dark overlay --}}
    
    <div class="relative z-10 px-4 sm:px-6">
      
        <h1 class="text-4xl text-center sm:text-5xl sm:text-left font-bold leading-tight">
             <span class="text-orange-500">Your Event</span> Starts Here<br>
            Crafted by <span class="text-orange-500">Moon Event Organizer</span>
        </h1>
        <p class="mt-4 text-sm text-center sm:text-xl sm:text-left text-gray-200">
           Your Partner Event Solution
        </p>
        <div class="max-w-4xl mx-auto">
            <form  method="GET"
              class="bg-white shadow-lg rounded-xl mt-8 p-4  flex flex-wrap items-center gap-4 w-fit mb-8">

                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <div class="flex flex-1 min-w-[200px] flex-col md:block md:flex-none">
                    <label for="location" class="text-sm text-gray-600 mb-1">Select Location</label>
                    <div class="flex items-center border rounded-md px-3 py-2 w-full">
                        <span class="text-gray-500 mr-2">📍</span>
                        <select name="location" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                            <option value="">Select Location</option>
                            <option value="jakarta-selatan" {{ request('location') == 'jakarta-selatan' ? 'selected' : '' }}>Jakarta Selatan</option>
                            <option value="jakarta-barat" {{ request('location') == 'jakarta-barat' ? 'selected' : '' }}>Jakarta Barat</option>
                        </select>
                    </div>
                </div>

              <div class="flex flex-1 min-w-[200px] flex-col md:block  md:flex-none">
                <label for="price" class="text-sm text-gray-600 mb-1">Price</label>
                <div class="flex items-center border rounded-md px-3 py-2 w-full sm:w-auto">
                    <span class="text-gray-500 mr-2">💰</span>
                    <select name="price" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                        <option value="0-15000000" {{ request('price') == '0-15000000' ? 'selected' : '' }}>
                            Rp. 0 - Rp. 15.000.000
                        </option>
                        <option value="15000000-30000000" {{ request('price') == '15000000-30000000' ? 'selected' : '' }}>
                            Rp. 15.000.000 - Rp. 30.000.000
                        </option>
                    </select>
                </div>
            </div>

            <div class="flex flex-1 min-w-[200px] flex-col md:block md:flex-none">
                <label for="pax" class="text-sm text-gray-600 mb-1">Pax</label>
                <div class="flex items-center border rounded-md px-3 py-2 w-full sm:w-auto">
                    <span class="text-gray-500 mr-2">👥</span>
                    <select name="pax" class="outline-none bg-transparent text-sm text-gray-700 w-full">
                        <option value="500" {{ request('pax') == '500' ? 'selected' : '' }}>500</option>
                        <option value="1000" {{ request('pax') == '1000' ? 'selected' : '' }}>1000</option>
                    </select>
                </div>
            </div>
            
                <button type="submit"
                        class="flex flex-1 min-w-[200px] flex-col md:block  md:flex-none md:min-w-0 bg-orange-500 text-white px-5 py-2 rounded-md hover:bg-orange-600 transition-all text-sm font-medium mt-5">
                    Search
                </button>

            </form>
        </div>
    </div>
</div>