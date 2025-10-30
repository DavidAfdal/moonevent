@props(['categories'])

@if ($categories)

<div class="w-full lg:w-fit flex flex-wrap rounded-md border border-gray-300 overflow-hidden  px-1 py-1 bg-[#FF704380]/50 gap-x-0.5 gap-y-2">
        <a href="{{ request()->fullUrlWithQuery(['category' => 'all']) }}"
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === 'all' || request('category') === null ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
            All
        </a>
        @foreach ($categories as $category)
        <a href="{{ request()->fullUrlWithQuery(['category' => $category->slug]) }}""
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === $category->slug ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
           {{ $category->name }} 
        </a>
        @endforeach
    
</div>
@endif