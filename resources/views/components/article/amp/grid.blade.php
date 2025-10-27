@props(['articles', 'domain', 'page'])
@unless (empty($articles))
    @if (true)
        @php
            $sorted_articles = Dev\PHPActions\Action::build(App\Actions\Amp\Article\ArticleFetch::class)
                ->data(['render_as_json' => true])
                ->run()
                ->getData('items');
        @endphp
        <div class="grid grid-cols-2">
            @foreach ($sorted_articles as $article)
                <article class="relative w-full text-white flex-col rounded aspect-[8/12] article-style-root">
                    <a class="link-article-listener" aria-label="{{ $article['article']['title'] }}" target="_blank"
                        href="{{ $article['url'] }}">
                        <div class="min-h-40 relative aspect-[8/12]">
                            <amp-img layout="fill" alt="{{ $article['article']['title'] }}"
                                class="object-cover w-full h-full cover amp-image-rounded"
                                src="{{ $article['image'] }}"></amp-img>
                        </div>

                        <div class="absolute left-0 right-0 bottom-0 z-20">
                            <div class="relative py-4 flex flex-grow flex-col rounded article-style-info">
                                <div class="absolute inset-0 -z-10 article-style-layer"></div>
                                <h2 class="font-bold text-center text-lg whitespace-nowrap">{{ $article['article']['title'] }}</h2>
                                @unless (empty($article['number']))
                                    <p class="text-center font-bold text-lg whitespace-nowrap">
                                        {{ $article['number'] }}</p>
                                @endunless
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    @else
        <div class="text-white relative">
            <amp-state id="localState">
                <script type="application/json">
           @json(['items' => Dev\PHPActions\Action::build(App\Actions\Amp\Article\ArticleFetch::class)->data(['render_as_json' => true])->run()->getData('items')])
        </script>
            </amp-state>
            <amp-list layout="container" class="w-full"
                src="{{ App\Routing\Amp::route('amp.article.fetch') }}&v={{ \Carbon\Carbon::now()->timestamp }}"
                binding="refresh">
                <template type="amp-mustache">
                    {!! file_get_contents(resource_path('/views/components/article/amp/item.html')) !!}
                </template>
                <div fallback class="relative h-screen w-full overflow-y-scroll no-scroll-bar">
                    <amp-list layout="fill" class="article-list h-screen w-full" src="amp-state:localState"
                        binding="refresh">
                        <template type="amp-mustache">
                            {!! file_get_contents(resource_path('/views/components/article/amp/item.html')) !!}
                        </template>
                    </amp-list>
                </div>
            </amp-list>
        </div>
    @endif
@else
    <div></div>
@endunless
