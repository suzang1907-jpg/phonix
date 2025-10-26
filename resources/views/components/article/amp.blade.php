@props(['domain' => null, 'article' => null, 'page' => null])
<article class="relative w-full text-white flex-col rounded-xl" style="{{ $page->articleStyleRoot($article) }}">
    <a class="link-article-listener" aria-label="{{ $article->title }}" target="_blank" href="{{ $article->amp() }}">
        <div class="min-h-40 relative aspect-[8/12]">
            <amp-img layout="fill" alt="{{ $article->title }}" class="object-cover w-full h-full cover amp-image-rounded" src="{{ route('file.article.main.image', ['id' => $article->id, 'xversion' => $article->image_id]) }}"></amp-img>
        </div>
        <div class="absolute left-0 right-0 bottom-0 p-2">
            <div class="relative px-2 py-2 flex flex-grow flex-col rounded-xl" style="{{ $page->articleStyle() }}">
                @unless (empty($article->info))
                <p class="text-center text-sm">{{ $article->info }}</p>
                @endunless
                <h2 class="font-bold text-center">{{ $article->title }}</h2>
                <div class="absolute -top-2 left-0 right-0">
                    <div class="flex flex-row justify-end">
                        @if($article->isOnline())
                        <div class="bg-green-400 rounded-full h-4 w-4 border border-green-500">
                        </div>
                        @else
                        <div class="bg-gray-400 rounded-full h-4 w-4 border border-gray-500">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </a>
</article>