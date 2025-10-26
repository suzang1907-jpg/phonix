@props(['article' => null])
<div>
    @unless (empty($article->meta['chat_enabled'] ?? null))
    @unless(empty(config('chat_access_key')))
    @unless(empty(config('chat_token_url')))
    <a class="block px-3 py-2 bg-gradient-to-r from-red-700 to-red-600 text-white w-full link-whatsapp" target="_blank" href="{{ $article->chat() }}">
        <div class="w-full text-center flex flex-row items-center justify-evenly font-bold">
            <x-svg.chat />
            <div>
                <p>
                    ONLİNE CHAT
                </p>
            </div>
            <x-svg.chat />
        </div>
    </a>
    @endunless
    @endunless
    @endunless
</div>