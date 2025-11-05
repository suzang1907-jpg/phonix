@props(['articles', 'domain', 'page'])
@unless (empty($articles))

    @php
        $sorted_articles = Dev\PHPActions\Action::build(App\Actions\Amp\Article\ArticleFetch::class)
            ->data(['render_as_json' => true])
            ->run()
            ->getData('items');
    @endphp
    <div class="article-list">
        @foreach ($sorted_articles as $article)
            <article class="article-list-item">
                <a class="link-article-listener" aria-label="{{ $article['article']['title'] }}" target="_blank"
                    href="{{ $article['url'] }}">
                    <div class="min-h-40 relative article-aspect">
                        <amp-img layout="fill" alt="{{ $article['article']['title'] }}"
                            class="object-cover w-full h-full cover" src="{{ $article['image'] }}"></amp-img>
                    </div>

                    <div class="absolute left-0 right-0 bottom-0 z-20">
                        <div class="relative pt-4 flex flex-grow flex-col article-style-info">
                            <div class="absolute inset-0 -z-10 article-style-layer"></div>
                            <h2 class="font-bold text-center text-lg whitespace-nowrap article-text-shadow">
                                {{ $article['article']['title'] }}</h2>
                            @unless (empty($article['number']))
                                <p class="text-center font-bold text-lg whitespace-nowrap article-text-shadow">
                                    {{ $article['number'] }}</p>
                            @endunless
                            <div class="flex flex-row w-full p-1">
                                @if (!empty($article['linkphone']) && !empty($article['linkwhatsapp']))
                                    <x-link.phone-s :link="$article['linkphone']" />
                                    <x-link.whatsapp-s :link="$article['linkwhatsapp']" />
                                @elseif (!empty($article['linkphone']) && empty($article['linkwhatsapp']))
                                    <x-link.phone-s :link="$article['linkphone']" :rounded="true" />
                                @elseif (empty($article['linkphone']) && !empty($article['linkwhatsapp']))
                                    <x-link.whatsapp-s :link="$article['linkwhatsapp']" :rounded="true" />
                                @endif
                            </div>
                        </div>
                    </div>

                    @unless (empty($article['article']['info']))
                        <div class="absolute top-2 left-2 px-2 py-1 bg-black/50 rounded">
                            <p class="text-center text-xs whitespace-nowrap">
                                {{ $article['article']['info'] }}</p>
                        </div>
                    @endunless
                </a>
            </article>
        @endforeach
    </div>
@else
    <div></div>
@endunless
