<div class="w-full lg:w-fit flex flex-wrap rounded-md border border-gray-300 overflow-hidden  px-1 py-1 bg-[#FF704380]/50 gap-x-0.5 gap-y-2">
        <a href="{{ request()->fullUrlWithQuery(['category' => 'all']) }}"
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === 'all' || request('category') === null ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
            All
        </a>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'wedding']) }}""
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === 'wedding' ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
            Wedding
        </a>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'building-rental']) }}"
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === 'building-rental' ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
            Building Rental
        </a>
        <a href="{{ request()->fullUrlWithQuery(['category' => 'event-package']) }}"
        class="flex-1 flex justify-center items-center px-4 py-2 text-sm font-medium transition-all rounded-md min-w-[100px] text-center
                {{ request('category') === 'event-package' ? 'bg-orange-500 text-white' : 'bg-transparent text-white hover:bg-orange-500' }}">
            Event Package
        </a>
</div>