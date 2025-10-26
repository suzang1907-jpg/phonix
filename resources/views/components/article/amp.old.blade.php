@props(['domain' => null, 'article' => null, 'page' => null])
<article class="relative w-full text-white flex-col rounded-xl" style="{{ $page->articleStyle() }}">
    <div class="relative px-2 py-2 flex flex-grow flex-col rounded-t-xl">
        {{--
            @unless (empty($domain->site->project->article_banner_id))
        <div class="relative flex flex-col h-5 items-center justify-center">
            <amp-anim class="object-contain max-w-32 w-full h-5 mx-auto contain" layout="fill" alt="{{ $article->title }} / Banner" width="120" height="20" src="{{ route('file.article.banner', ['id' => $article->id]) }}"></amp-anim>
    </div>
    @endunless
    --}}

    @unless (empty($article->info))
    <p class="text-center">{{ $article->info }}</p>
    @endunless
    </div>
    <a class="link-article-listener" aria-label="{{ $article->title }}" target="_blank" href="{{ $article->amp() }}">
        <div class="min-h-28 relative aspect-[9/12] rounded-b-xl">
            <amp-img layout="fill" alt="{{ $article->title }}" class="object-cover w-full h-full cover amp-image-bottom-rounded" src="{{ route('file.article.main.image', ['id' => $article->id]) }}"></amp-img>
            {{--
            @unless (empty($domain->site->project->article_watermark_id))
            <div class="absolute top-2 left-2 z-10 w-16 h-16">
                <amp-img layout="fill" alt="{{ $article->title }} / Watermark" class="w-16 h-16 object-cover cover" src="{{ route('file.article.water.mark', ['id' => $article->id]) }}"></amp-img>
        </div>
        @endunless
        --}}

        <div class="absolute bottom-0 left-0 right-0 p-2 rounded-b-xl" style="{{ $page->articleStyle() }}">
            <h2 class="text-lg font-bold text-center">{{ $article->title }}</h2>
        </div>
        {{--
            <div class="absolute bottom-0 left-0 right-0 p-2">
                @if (empty($article->phone_number) && empty($article->whatsapp_number) && empty($article->telegram))
                <div class="font-bold text-white article-contact text-center">Tıkla Ara</div>
                @elseif (empty($article->whatsapp_number))
                <div class="font-bold text-white article-contact text-center">Sadece Telegram</div>
                @elseif (empty($article->phone_number))
                <div class="font-bold text-white article-contact text-center">Sadece WhatsApp</div>
                @else
                <div class="font-bold text-white article-contact text-center">
                    {{ trim(str_replace('+90', '0', $article->phone_number ?? '')) }}
        </div>
        @endif
        </div>
        --}}
        </div>
    </a>
    {{--
    <div class="flex flex-row">
        @unless (empty($article->phone_number))
        <x-link.phone-s :article="$article" />
        @endunless
        @unless (empty($article->whatsapp_number))
        <x-link.whatsapp-s :article="$article" />
        @endunless
        @unless (empty($article->telegram))
        <x-link.telegram-s :article="$article" />
        @endunless
        @unless (empty($article->adsterra_link))
        <x-link.adsterra-s :article="$article" />
        @endunless
    </div>
    --}}
</article>