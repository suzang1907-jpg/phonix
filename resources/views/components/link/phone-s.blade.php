@props(['link' => null])
<div class="w-half col-span-1 h-full">
    @unless (empty($link))
        <a class="block px-3 py-2 bg-phone-link text-white w-full link-phone h-full rounded-l-md" target="_blank" href="tel://{{ $link }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.phone-s />
            </div>
        </a>
    @endunless
</div>
