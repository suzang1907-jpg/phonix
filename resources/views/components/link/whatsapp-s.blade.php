@props(['article' => null])
<div class="w-full h-full">
    @unless (empty($article->whatsapp_number))
        <a class="block px-3 py-2 bg-whatsapp-link bg-gradient-to-r from-green-700 to-green-600 text-white w-full link-whatsapp" target="_blank"
            href="{{ $article->getFormattedWhatsappLink() }}">
            <div class="w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.whatsapp-s />
            </div>
        </a>
    @endunless
</div>
