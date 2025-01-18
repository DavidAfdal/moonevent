@extends('front.layouts.app')
@section('content')

<section class="max-w-[400px] bg-[#F9F2EF] mx-auto px-4 py-8">
    <nav class="mt-8 px-4 w-full flex items-center justify-between">
        <a href="{{route('front.calendarbooking', $package_tours->slug)}}">
          <img src="{{asset('assets/icons/back.png')}}" alt="back">
        </a>
        <p class="text-center m-auto font-semibold">Booking</p>
  </nav>
    <div class="max-w-[400px] bg-[#F9F2EF] mx-auto px-4 py-8">
        @if (session()->has('selected_Date'))
    <p>Selected Date: {{ session('selected_Date') }}</p>
@else
    <p>No date selected yet.</p>
@endif
        <h4 class="text-center text-2xl font-bold mb-6">Detail Wedding Package</h4>
        <form>
            <!-- Venue -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Venue</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="venue">
                    @forelse($venue as $item)
                    <option value="{{$item->id}}" selected>{{$item->venue_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- Catering -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Catering</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="catering">
                   @forelse($catering as $item)
                   <option value="{{$item->id}}" selected>{{$item->catering_name}}</option>
                   @empty
                   <option value="" selected>Tidak ada data</option>
                   @endforelse
                </select>
            </div>

            <!-- Decoration -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Decoration</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="decoration">
                    @forelse($decoration as $item)
                    <option value="{{$item->id}}" selected>{{$item->decoration_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- Fashion Styling and Makeup -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Fashion Styling and Makeup</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="fashion_makeup">
                    @forelse($MUA as $item)
                    <option value="{{$item->id}}" selected>{{$item->mua_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- MC -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">MC</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="mc">
                    @forelse($MC as $item)
                    <option value="{{$item->id}}" selected>{{$item->mc_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- Entertainment -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Entertainment</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="entertainment">
                    @forelse($entertainment as $item)
                    <option value="{{$item->id}}" selected>{{$item->entertainment_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- Photography -->
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Photography</label>
                <select class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-indigo-200" name="photography">
                    @forelse($photography as $item)
                    <option value="{{$item->id}}" selected>{{$item->photography_name}}</option>
                    @empty
                    <option value="" selected>Tidak ada data</option>
                    @endforelse
                </select>
            </div>

            <!-- Confirm Button -->
            <div class="mt-6">
                <a href="{{ route('front.reservation.check') }}" class="block w-full text-center bg-indigo-600 text-white py-2 rounded-md shadow hover:bg-indigo-700 transition duration-200">
                    Confirm
                </a>
            </div>

        </form>
    </div>
</section>

@endsection
