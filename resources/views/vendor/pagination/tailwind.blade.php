@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-8">
        <ul class="inline-flex items-center bg-white rounded-md shadow px-3 py-2 space-x-1 text-sm font-medium">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="text-gray-400 px-2">‹</li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" class="text-gray-600 hover:text-orange-500 px-2">‹</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Dots (Three Dots Separator) --}}
                @if (is_string($element))
                    <li class="text-gray-400 px-2">...</li>
                @endif

                {{-- Page Numbers --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="bg-orange-500 text-white px-3 py-1 rounded">{{ $page }}</li>
                        @else
                            <li>
                                <a href="{{ $url }}" class="text-gray-700 hover:text-orange-500 px-3 py-1">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" class="text-gray-600 hover:text-orange-500 px-2">›</a>
                </li>
            @else
                <li class="text-gray-400 px-2">›</li>
            @endif
        </ul>
    </nav>
@endif