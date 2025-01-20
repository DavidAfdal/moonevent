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
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">

                @forelse($package_bookings as $booking)
                <div class="item-card flex flex-row justify-between items-center">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{Storage::url($booking->tour->thumbnail)}}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">
                                {{$booking->tour->name}}
                            </h3>
                        <p class="text-slate-500 text-sm">
                            {{$booking->tour->category->name}}
                        </p>
                        </div>
                    </div> 
                    @if($booking->status=='success')
                        <div class="success-badge w-fit border border-[#60A5FA] p-[4px_8px] rounded-lg bg-[#EFF6FF] flex items-center justify-center">
                             <span class="text-xs leading-[22px] tracking-035 text-[#2563EB]">Success Paid</span>
                        </div>
                    @elseif($booking->status=='declined')
                        <div class="declined-badge w-fit border border-[#F87171] p-[4px_8px] rounded-lg bg-[#FEE2E2] flex items-center justify-center">
                            <span class="text-xs leading-[22px] tracking-035 text-[#B91C1C]">Declined</span>
                        </div>
                    @endif

                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Price</p>
                        <h3 class="text-indigo-950 text-xl font-bold">Rp {{number_format($booking->total_amount, 0, ',', ',')}}</h3>
                    </div>
                    {{-- <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Total Session</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$booking->tour->days}} Session</h3>
                    </div>
                    <div  class="hidden md:flex flex-col">
                        <p class="text-slate-500 text-sm">Quantity</p>
                        <h3 class="text-indigo-950 text-xl font-bold">{{$booking->quantity}} Pack</h3>
                    </div> --}}
                    <div class="hidden md:flex flex-row items-center gap-x-3">
                        <a href="{{route('admin.package_bookings.show', $booking)}}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Details
                        </a>
                    </div>
                </div>
                @empty
                <p>Belum ada pemesanan Paket Wedding Terbaru</p>
                    
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
