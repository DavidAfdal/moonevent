<div class="bg-gray-200 p-6 rounded-lg shadow-sm w-full max-w-sm text-left">
    <div class="flex items-center mb-2">
        <img src="{{ $avatar }}" alt="{{ $name }}" class="w-10 h-10 rounded-full mr-3">
        <div>
            <div class="font-semibold text-gray-900">{{ $name }}</div>
            <div class="text-sm text-neutral-500">{{ $date }}</div>
        </div>
    </div>
    <div class="font-semibold text-sm text-orange-500 mb-2">Highly Recommended</div>
    <p class="text-sm text-neutral-500">{{ $message }}</p>
</div>