@props(['article' => null])
<div class="w-full h-full">
    @unless (empty($article->telegram))
    <a class="block px-3 py-2 bg-gradient-to-r from-blue-700 to-blue-600 text-white w-full link-telegram" target="_blank" href="https://t.me/{{ str_replace(' ', '', $article->telegram) }}?text={{ $article->getFormattedWhatsAppMessage() }}">
        <div class="w-full text-center flex flex-row items-center justify-evenly font-bold">
            <x-svg.telegram-s />
        </div>
    </a>
    @endunless
</div>