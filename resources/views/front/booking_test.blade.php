@extends('front.layouts.app')

@section('content')
<section class="bg-[#F5F5F5]">
    <div class="max-w-[1440px] mx-auto py-12 px-4 mt-20">
        <h2 class="text-2xl font-bold mb-8">Secure Your Wedding Organizer Today – Fast And Hassle-Free!</h2>
         @if($errors->any())
                @foreach($errors->all() as $e)
                  <div class="w-full h-fit py-2 mb-4  bg-red-400/50 border border-red-500 rounded-lg text-center  text-red-500 mx-auto">{{ $e }}</div>
                @endforeach
        @endif
        <form method="POST" action='{{route('front.book.store', $package_tours)}}' class="grid grid-cols-1  lg:grid-cols-3 gap-8">
            @csrf
            {{-- Left Sidebar --}}
            <div   class="lg:col-span-2 space-y-8 mt-0 order-2 lg:order-1">
                {{-- User Detail --}}
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Enter Your Detail</h3>
                    <div class="flex gap-4 mb-4">
                        <p class="text-lg text-semibold  bg-amber-400/40 text-amber-500 p-4 rounded-lg border border-amber-500">Morning: 08.00 - 13.00</p>
                        <p class="text-lg text-semibold  bg-indigo-600/40 text-indigo-700 p-4 rounded-lg border border-indigo-700">Night: 15.00 - 21.00</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium">Username</label>
                            <input name="username" disabled type="text" value="{{Auth::user()->name}}" class="w-full mt-1 border rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500" required placeholder="Septian">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Email</label>
                            <input name="email" type="email" disabled value="{{Auth::user()->email}}" class="w-full mt-1 border rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500" required placeholder="septian@gmail.com">
                        </div>
                        <div class="flex gap-4 w-full">
                           <div class="w-full">
                                <label class="block text-sm font-medium">Select Date</label>
                                <input name="booking_date" type="date" 
                                    class="w-full mt-1 border rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500" 
                                    required>
                            </div>
                            <div class="w-full">
                                <label class="block text-sm font-medium">Time</label>
                                <select name="booking_time" class="w-full mt-1 border rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500">
                                    <option value="Morning">Morning</option>
                                    <option value="Night">Night</option>
                                 </select>
                            </div>
                        </div>

                        <div class="">
                            <label class="block text-sm font-medium">Phone Number</label>
                            <div class="no-spinner flex items-center border rounded space-x-2 mt-2 focus-within:ring-2 focus-within:ring-orange-500">
                                <span class="border-r border-gray-300 px-2">+62</span>
                                <input
                                    type="number"
                                    id="phoneNumber"
                                    name="phone_number"
                                    value="{{ltrim(Auth::user()->phone_number, '0')}}"
                                    placeholder="8121455663433"
                                    disabled
                                    class="flex-1 rounded-md px-3 py-2 focus:outline-none"
                                />
                            </div>
                        </div>


                        <div>
                            <label class="block text-sm font-medium">Couple Name (optional) </label>
                            <input name="couple_name" type="text" value="" class="w-full mt-1 border rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-orange-500 focus:border-orange-500"  placeholder="Septian">
                        </div>

                         <div class="">
                            <label class="block text-sm font-medium">Alternatif Phone Number (optional)</label>
                            <div class="no-spinner flex items-center border rounded space-x-2 mt-2 focus-within:ring-2 focus-within:ring-orange-500">
                                <span class="border-r border-gray-300 px-2">+62</span>
                                <input
                                    type="number"
                                    id="phoneNumber"
                                    name="alternate_phone"
                                    value=""
                                    placeholder="8121455663433"
                                    class="flex-1 rounded-md px-3 py-2 focus:outline-none"
                                />
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                @if ($package_tours->category->is_wedding)     
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-semibold mb-4">Add Wedding Package</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                         <x-wedding-package-select 
                            name="decoration_id" 
                            label="Decoration" 
                            icon="assets/icons/decoration.svg" 
                            :options="$decoration->pluck('decoration_name', 'id')" 
                        />

                        <x-wedding-package-select 
                            name="mua_id"     
                            label="Fashion, Styling & Makeup" 
                            icon="assets/icons/fashion.svg" 
                            :options="$MUA->pluck('mua_name', 'id')" 
                        />

                        <x-wedding-package-select 
                            name="catering_id"   
                            label="Catering" 
                            icon="assets/icons/catering.svg" 
                            :options="$catering->pluck('catering_name', 'id')" 
                        />

                        <x-wedding-package-select 
                            name="entertainment_id" 
                            label="Entertainment" 
                            icon="assets/icons/entertaiment.svg" 
                            :options="$entertainment->pluck('entertainment_name', 'id')" 
                        />

                        <x-wedding-package-select 
                            name="mc_id"         
                            label="Master of Ceremony (MC)" 
                            icon="assets/icons/mc.svg" 
                            :options="$MC->pluck('mc_name','id')" 
                        />

                        <x-wedding-package-select 
                            name="photographie_id" 
                            label="Photography" 
                            icon="assets/icons/photo.svg" 
                            :options="$photography->pluck('photography_name', 'id')" 
                        />

                    </div>
                </div>
                @endif
                {{-- Add Wedding Package --}}
        
                {{-- Consultation Notice --}}
                <div class="bg-white p-6 rounded-lg shadow text-sm">
                    <h3 class="text-lg font-semibold mb-4">Consultation Notice</h3>
                    {{-- <div class="flex flex-col gap-2"> {!! Str::markdown($package_tours->general_information) !!}</div> --}}
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        <li><strong>Free Of Charge:</strong> This booking is intended for consultation purposes only. You will not be charged any fees for reserving this session.</li>
                        <li><strong>Planning Discussion:</strong> During the consultation, we will discuss your wedding ideas, preferences, and how we can help make your day special.</li>
                        <li><strong>No Commitment Required:</strong> There is no obligation to proceed with any package or service after the consultation.</li>
                        <li><strong>Initial Step Only:</strong> This is the first step to understanding your needs before crafting a personalized wedding plan.</li>
                    </ul>
                </div>
            </div>
        
            {{-- Right Sidebar --}}
            <div class="bg-white p-6 rounded-lg shadow space-y-4 h-fit order-1 lg:order-2">
                <img src="{{Storage::url($package_tours->thumbnail)}}" alt="Wedding" class="rounded-lg w-full h-48 object-cover">
                <h3 class="text-xl font-semibold">{{$package_tours->name}}</h3>
                <div class="h-0.5 w-full bg-neutral-300"></div>
                <div>
                    <p class="text-base text-gray-600 font-semibold mb-4">{{$package_tours->category->name}}</p>
                    <p class="text-sm text-gray-600">{{$package_tours->location}}</p>
                </div>
                @if ($package_tours->pax)
                    <div class="text-sm">
                        <p class="text-gray-500">Total Invited Guests</p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="bg-[#FF704380] text-white px-3 py-1 rounded-ee-2xl rounded-ss-2xl border border-orange-500 text-sm font-semibold">{{$package_tours->pax}} Pax</span>
                    </div>
                @endif
        
                <button type="submit"  class="w-full mt-4 bg-[#FF7043] hover:bg-[#e55a2d] text-white py-2 px-4 rounded-lg font-semibold">
                    Confirm Booking
                </button>
            </div>
            
        </form>
    </div>
</section>
@endsection


@push('styles')
  <style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0; 
    }
  </style>
@endpush