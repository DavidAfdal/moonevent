@extends('front.layouts.app')
@section('content')

<section class="max-w-[400px] bg-[#F9F2EF] mx-auto px-4 py-8 rounded-lg shadow-md">
    <!-- Navigation -->
    <nav class="mt-4 px-4 w-full flex items-center justify-between">
        <a href="{{route('front.calendarbooking', $package_tours->slug)}}" class="flex items-center">
            <img src="{{asset('assets/icons/back.png')}}" alt="back" class="w-6 h-6">
        </a>
        <p class="text-center m-auto font-semibold text-lg">Booking</p>
    </nav>

    <!-- Image Header -->
    <div class="w-full rounded-lg overflow-hidden mt-6 shadow-lg">
        <img src="{{asset('assets/backgrounds/moonevent.jpg')}}" class="w-full h-100 object-cover" alt="Moon Event">
    </div>

    <!-- Booking Details -->
    <div class="bg-white mt-6 p-6 rounded-lg shadow">
        <!-- Selected Date -->
        @if (session()->has('selected_Date'))
            <p class="text-sm font-medium mb-4">Selected Date: <span class="text-indigo-600">{{ session('selected_Date') }}</span></p>
        @else
            <p class="text-sm font-medium mb-4 text-red-500">No date selected yet.</p>
        @endif

        <!-- Errors -->
        @if($errors->any())
            <div class="bg-red-100 text-red-600 p-4 rounded-lg mb-4">
                <ul class="list-disc pl-6">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h4 class="text-center text-2xl font-bold mb-6">Detail Wedding Package</h4>

        <!-- Form -->
        <form action='{{route('front.book.store', $package_tours)}}' method='POST'>
            @csrf

            <!-- Dynamic Fields -->
            @if($package_tours->category->name=='PAKET ACARA')
                @php
                    $fields = [
                        'Venue' => ['venue_id', $venue, 'venue_name'],
                        'Catering' => ['catering_id', $catering, 'catering_name'],
                        'Decoration' => ['decoration_id', $decoration, 'decoration_name'],
                        'Fashion Styling and Makeup' => ['mua_id', $MUA, 'mua_name'],
                        'MC' => ['mc_id', $MC, 'mc_name'],
                        'Entertainment' => ['entertainment_id', $entertainment, 'entertainment_name'],
                        'Photography' => ['photographie_id', $photography, 'photography_name'],
                    ];
                @endphp

                @foreach($fields as $label => [$name, $items, $item_name])
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-2">{{ $label }}</label>
                        <select name="{{ $name }}" class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200">
                            @forelse($items as $item)
                                <option value="{{ $item->id }}" selected>{{ $item->$item_name }}</option>
                            @empty
                                <option value="" selected>Tidak ada data</option>
                            @endforelse
                        </select>
                    </div>
                @endforeach
            @endif

            <!-- Confirm Button -->
            <div class="mt-6">
                <button type="submit" class="block w-full text-center bg-indigo-600 text-white py-2 rounded-md shadow hover:bg-indigo-700 transition duration-200">
                    Confirm
                </button>
            </div>

        </form>
    </div>
</section>

@endsection
