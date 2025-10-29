@props(['article' => null])
<div>
    @unless (empty($article->telegram))
    <a class="block px-3 py-2 bg-telegram-link text-white w-full link-telegram" target="_blank" href="https://t.me/{{ str_replace(' ', '', $article->telegram) }}?text={{ $article->getFormattedWhatsAppMessage() }}">
        <div class="w-full text-center flex flex-row items-center justify-evenly font-bold">
            <x-svg.telegram />
            <div>
                <p>
                    TELEGRAM'DAN YAZ
                </p>
            </div>
            <x-svg.telegram />
        </div>
    </a>
    @endunless
</div>