@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <x-button class="opacity-50">
                Orqaga
            </x-button>
        @else
            <x-button href="{{ $paginator->previousPageUrl() }}" rel="prev">
                Orqaga
            </x-button>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <x-button href="{{ $paginator->nextPageUrl() }}" rel="next">
                Oldinga
            </x-button>
        @else
            <x-button class="opacity-50">
                Oldinga
            </x-button>
        @endif
    </nav>
@endif
