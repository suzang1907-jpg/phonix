<x-layout.amp :page="$page" :ampiframe="false">
    <div class="max-w-screen-sm mx-auto text-invert bg-background">
        @unless (empty($article->phone_number))
            <x-link.phone :article="$article" />
            <div class="pb-2"></div>
        @endunless

        @unless (empty($article->whatsapp_number))
            <x-link.whatsapp :article="$article" />
            <div class="pb-2"></div>
        @endunless
        @unless (empty($article->telegram))
            <x-link.telegram :article="$article" />
            <div class="pb-2"></div>
        @endunless
        <article class="relative w-full text-white flex-col pt-12">
            <div class="relative aspect-square rounded-full mx-auto max-w-48">
                <amp-img layout="fill" alt="{{ $article->title }}"
                    class="object-cover w-full h-full cover amp-image-bottom-rounded-full"
                    src="{{ route('file.article.main.image', ['id' => $article->id, 'size' => '400x400', 'xversion' => $article->image_id]) }}"></amp-img>
                @if ($article->isOnline() || true)
                    <div
                        class="absolute bottom-4 right-4 rounded-full bg-background flex flex-col items-center justify-center p-0.5 h-6 w-6">
                        <div class="bg-green-400 rounded-full h-full w-full">

                        </div>
                    </div>
                @else
                    <div
                        class="absolute bottom-4 right-4 rounded-full bg-background flex flex-col items-center justify-center p-0.5 h-6 w-6">
                        <div class="bg-gray-400 rounded-full h-full w-full">

                        </div>
                    </div>
                @endif
            </div>
            <h2 class="text-lg font-bold text-center mt-2">{{ $article->title }}</h2>

        </article>
        <p class="mt-2 p-2 text-center">
            {{ $article->description }}
        </p>
        <div class="mt-2"></div>
        <x-article.images.amp :article="$article" :domain="$domain" />
        <div class="mt-2"></div>
        <x-link.phone :article="$article" />
        <div class="mt-2"></div>
        <x-link.whatsapp :article="$article" />
        <div class="mt-2"></div>
        <x-link.telegram :article="$article" />
        <div class="mt-2"></div>
        <x-article.amp.grid :page="$page" :domain="$page->domain()" :articles="$page->getData('articles')" />
    </div>
</x-layout.amp>
