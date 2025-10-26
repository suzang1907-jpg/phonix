@props(['domain' => null, 'article' => null])
<article class="relative w-full min-h-80 text-white bg-gradient-to-tr from-fuchsia-800 to-pink-800">
    <div class="relative p-2">
        <div class="relative flex flex-col h-5 items-center justify-center">
            @unless(empty($domain->site->project->article_banner_id))
            <img loading="lazy" decoding="async" class="object-contain max-w-32 w-full h-5 mx-auto contain" alt="{{ $article->title }} / Banner" width="120" height="20" src="{{ route('file.article.banner', ['id' => $article->id]) }}"></img>
            @endunless
        </div>
        <h2 class="text-lg font-bold text-center">{{ $article->title }}</h2>
    </div>
    <div class="min-h-28 relative aspect-[9/12]">
        <img loading="lazy" decoding="async" alt="{{ $article->title }}" class="object-cover w-full h-full cover" src="{{ route('file.article.main.image', ['id' => $article->id])  }}"></img>
        @unless(empty($domain->site->project->article_watermark_id))
        <div class="absolute bottom-2 right-2 z-10 w-16 h-16">
            <img loading="lazy" decoding="async" alt="{{ $article->title }} / Watermark" class="w-16 h-16 object-cover cover" src="{{ route('file.article.water.mark', ['id' => $article->id]) }}"></img>
        </div>
        @endunless
    </div>
    <div class="p-2 relative">
        <div class="flex flex-col justify-center items-center">
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
    </div>
    <a aria-label="{{ $article->title }}" target="_blank" href="{{ $article->amp() }}" class="z-20 absolute inset-0 border border-black link-article-listener"></a>
</article>