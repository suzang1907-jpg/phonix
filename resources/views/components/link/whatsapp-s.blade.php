@props(['link' => null])
<div class="w-full col-span-1">
    @unless (empty($link))
        <a class="block px-3 py-2 bg-whatsapp-link text-white w-full link-whatsapp" target="_blank" href="tel://{{ $link }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.whatsapp-s />
            </div>
        </a>
    @endunless
</div>
