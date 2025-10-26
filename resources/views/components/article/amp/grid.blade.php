@props(['articles', 'domain', 'page'])
@unless(empty($articles))
@php
$sorted_articles = $articles; //$articles->sortBy('meta.view_count');
@endphp
<div class="text-white relative h-screen w-full overflow-y-scroll no-scroll-bar">
    <amp-state id="localState">
        <script type="application/json">
           @json(['items' => Dev\PHPActions\Action::build(App\Actions\Amp\Article\ArticleFetch::class)->data(['render_as_json' => true])->run()->getData('items')])
        </script>
    </amp-state>
    <amp-list layout="fill" class="article-list h-screen w-full" src="{{ App\Routing\Amp::route('amp.article.fetch') }}&v={{\Carbon\Carbon::now()->timestamp}}" binding="refresh">
        <template type="amp-mustache">
            {!! file_get_contents(resource_path('/views/components/article/amp/item.html')) !!}
        </template>
        <div fallback class="relative h-screen w-full overflow-y-scroll no-scroll-bar">
            <amp-list layout="fill" class="article-list h-screen w-full" src="amp-state:localState" binding="refresh">
                <template type="amp-mustache">
                    {!! file_get_contents(resource_path('/views/components/article/amp/item.html')) !!}
                </template>
            </amp-list>
        </div>
    </amp-list>
</div>
@else
<div></div>
@endunless
