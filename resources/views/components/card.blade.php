<a href="{{ route('front.details', $slug) }}" class="w-full">
<div class="w-full rounded-lg overflow-hidden shadow-lg border border-gray-200 bg-white">
    <div class="relative">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-[215px] object-cover">
        <span class="absolute top-4 left-0 bg-orange-500 text-white text-sm px-3 py-2 rounded-se-2xl rounded-ee-2xl">
            {{ $category }}
        </span>
    </div>
    <div class="p-4">
        <div class="text-red-500 font-bold text-lg">Rp. {{ number_format($price, 0, ',', '.') }} </div>
        <div class="text-gray-800 font-semibold text-base mt-1 whitespace-nowrap overflow-hidden text-ellipsis">
            {{ $title }}
        </div>
        <div class="flex items-center text-sm text-gray-600 mt-2 space-x-3">
            <div class="flex items-center gap-2">
                <span><img src="{{asset('assets/icons/pax.svg')}}" alt="Pax" class="w-5 h-5"></span>
                <span>{{ $pax }} Pax</span>
            </div>
            <div class="flex items-center gap-1">
                <span><img src="{{asset('assets/icons/task.svg')}}" alt="Task" class="w-5 h-5"></span>
                <span>{{ $type }}</span>
            </div>
        </div>
        <div class="w-full h-0.5 bg-neutral-400 mt-2"></div>
        <div class="flex items-center text-sm text-gray-600 mt-3 gap-1">
            <span><img src="{{asset('assets/icons/location.svg')}}" alt="Task" class="w-5 h-5"></span>
            <span>{{ $location }}</span>
        </div>
    </div>
</div>
</a>