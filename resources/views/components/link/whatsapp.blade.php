@props(['article' => null])
<div>
    @unless (empty($article->whatsapp_number))
        <a class="block px-3 py-2 bg-whatsapp-link text-white w-full link-whatsapp" target="_blank"
            href="{{ $article->getFormattedWhatsappLink() }}">
            <div class="w-full text-center flex flex-row items-center justify-evenly font-bold">
                <x-svg.whatsapp />
                <div>
                    <p>
                        WHATSAPP'TAN YAZ
                    </p>
                </div>
                <x-svg.whatsapp />
            </div>
        </a>
    @endunless
</div>
