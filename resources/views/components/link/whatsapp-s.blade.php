@props(['link' => null, 'rounded' => false])
@unless (empty($link))
    <a class="flex grow px-3 py-2 bg-whatsapp-link text-white link-whatsapp h-full rounded-r-md {{ $rounded ? 'rounded-l-md' : '' }}"
        target="_blank" href="{{ $link }}">
        <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold h-6">
            <x-svg.whatsapp-s />
        </div>
    </a>
@endunless
