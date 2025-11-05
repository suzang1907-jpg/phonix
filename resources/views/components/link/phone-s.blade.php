@props(['value' => null])
<div class="w-full col-span-1">
    @unless (empty($value))
        <a class="block px-3 py-2 bg-phone-link text-white w-full link-phone" target="_blank" href="tel://{{ $value }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.phone-s />
            </div>
        </a>
    @endunless
</div>
