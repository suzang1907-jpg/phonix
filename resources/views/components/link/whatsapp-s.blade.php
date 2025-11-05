@props(['link' => null])
<div class="flex grow col-span-1 h-full">
    @unless (empty($link))
        <a class="block px-3 py-2 bg-whatsapp-link text-white w-full link-whatsapp h-full rounded-r-md" target="_blank" href="tel://{{ $link }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold h-6">
                <x-svg.whatsapp-s />
            </div>
        </a>
    @endunless
</div>
