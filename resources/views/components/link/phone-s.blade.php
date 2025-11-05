@props(['link' => null, 'rounded' => false])
@unless (empty($link))
    <a class="px-3 py-2 bg-phone-link text-white flex grow link-phone h-full rounded-l-md {{ $rounded ? 'rounded-r-md' : '' }}"
        target="_blank" href="{{ $link }}">
        <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
            <x-svg.phone-s />
        </div>
    </a>
@endunless
