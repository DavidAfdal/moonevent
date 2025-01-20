<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details Booking') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 space-y-8">

                <!-- Booking Details Section -->
                <div class="flex flex-row justify-between items-center">
                    <div class="flex items-center gap-4">
                        <img src="{{ Storage::url($packageBooking->tour->thumbnail) }}" 
                             alt="" 
                             class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $packageBooking->tour->name }}</h3>
                            <p class="text-slate-500 text-sm">{{ $packageBooking->tour->category->name }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="w-fit text-sm font-bold py-2 px-3 rounded-full text-white 
                            {{ $packageBooking->status == 'success' ? 'bg-green-500' : ($packageBooking->status == 'declined' ? 'bg-red-500' : 'bg-orange-500') }}">
                            {{ strtoupper($packageBooking->status) }}
                        </span>
                        @if(!$packageBooking->is_paid)
                        <form action="{{ route('admin.package_bookings.update', $packageBooking) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="font-bold py-2 px-4 bg-indigo-700 text-white rounded-full">
                                Approve Transaction
                            </button>
                        </form>
                        <form action="{{ route('admin.package_bookings.decline', $packageBooking) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="font-bold py-2 px-4 bg-red-500 text-white rounded-full">
                                Decline Transaction
                            </button>
                        </form>
                        @endif
                    </div>
                </div>

                <hr class="border-gray-200">

                <!-- Customer Details Section -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div>
                            <p class="text-slate-500 text-sm">Name</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $packageBooking->customer->name }}</h3>
                        </div>
                        <div>
                            <p class="text-slate-500 text-sm">Email</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $packageBooking->customer->email }}</h3>
                        </div>
                        <div>
                            <p class="text-slate-500 text-sm">Phone</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $packageBooking->customer->phone_number }}</h3>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <p class="text-slate-500 text-sm">Date</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ date('M d, Y', strtotime($packageBooking->start_date)) }}</h3>
                        </div>
                    </div>
                </div>

                <hr class="border-gray-200">

                <!-- Package Details Section -->
                <div class="bg-gray-50 p-6 rounded-lg space-y-4">
                    <h3 class="font-semibold">Package Details</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <p>Catering</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->catering)->catering_name }}</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p>Decoration</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->decoration)->decoration_name }}</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p>Fashion Styling and Makeup</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->mua)->mua_name }}</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p>MC</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->mc)->mc_name }}</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p>Entertainment</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->entertainment)->entertainment_name }}</p>
                        </div>
                        <div class="flex justify-between text-sm">
                            <p>Photography</p>
                            <p class="font-semibold text-indigo-950">{{ optional($packageBooking->photograph)->photography_name }}</p>
                        </div>
                    </div>
                </div>

                <!-- Total Amount Section -->
                <div class="mt-6">
                    <p class="text-slate-500 text-sm">Total Amount</p>
                    <h3 class="text-indigo-950 text-xl font-bold">
                        Rp {{ number_format($packageBooking->total_amount, 0, ',', ',') }}
                    </h3>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
