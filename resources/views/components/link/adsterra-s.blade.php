@props(['article' => null])
<div class="w-full h-full">
    @unless (empty($article->ad_link))
        <a class="h-full block px-3 py-2 bg-gradient-to-r from-gray-900 to-gray-800 text-white w-full link-ad" target="_blank"
            href="{{ $article->ad_link }}">
            <div class="py-1 w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.phone-s />
            </div>
        </a>
    @endunless
</div>
