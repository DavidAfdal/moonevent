<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Bookings') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 space-y-6">

                @forelse($package_bookings as $booking)
                <div class="flex flex-row justify-between items-center border-b pb-4">
                    <div class="flex flex-row items-center gap-4">
                        <img src="{{Storage::url($booking->tour->thumbnail)}}" alt="" class="rounded-xl object-cover w-[100px] h-[80px]">
                        <div>
                            <h3 class="text-indigo-950 text-lg font-semibold">{{$booking->tour->name}}</h3>
                            <p class="text-slate-500 text-sm">{{$booking->tour->category->name}}</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        @if($booking->status=='success')
                            <div class="flex items-center border border-blue-500 px-3 py-1 rounded-md bg-blue-50">
                                <span class="text-xs text-blue-600">Success</span>
                            </div>
                        @elseif($booking->status=='declined')
                            <div class="flex items-center border border-red-500 px-3 py-1 rounded-md bg-red-50">
                                <span class="text-xs text-red-600">Declined</span>
                            </div>
                        @else
                            <div class="flex items-center border border-orange-500 px-3 py-1 rounded-md bg-orange-50">
                                <span class="text-xs text-orange-600">Pending</span>
                            </div>
                        @endif
                    </div>

                    <div class="hidden md:block text-right">
                        <p class="text-slate-500 text-sm">Price</p>
                        <h3 class="text-indigo-950 text-lg font-semibold">Rp {{number_format($booking->total_amount, 0, ',', ',')}}</h3>
                    </div>

                    <div>
                        <a href="{{route('admin.package_bookings.show', $booking)}}" class="text-white bg-indigo-700 px-4 py-2 rounded-md font-medium hover:bg-indigo-800">Details</a>
                    </div>
                </div>
                @empty
                <p class="text-center text-slate-500">Belum ada pemesanan Paket Wedding Terbaru</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
