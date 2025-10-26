@props(['collection' => null])
@if ($collection->hasMorePages() || $collection->currentPage() > 1)
    <div class="flex flex-row items-center justify-between mt-2">
        @if ($collection->currentPage() > 1)
            <a rel="nofollow"
                class="mt-2 px-2 py-1 bg-background text-invert flex rounded-md w-min whitespace-nowrap text-sm select-none cursor-pointer"
                href="{{ $collection->previousPageUrl() }}">
                {{ __('base.back') }}
            </a>
        @else
            <div></div>
        @endif
        @if ($collection->hasMorePages())
            <a rel="nofollow"
                class="mt-2 px-2 py-1 bg-background text-invert flex rounded-md w-min whitespace-nowrap text-sm select-none cursor-pointer"
                href="{{ $collection->nextPageUrl() }}">
                {{ __('base.next') }}
            </a>
        @else
            <div></div>
        @endif
    </div>
@else
    <div></div>
@endif
