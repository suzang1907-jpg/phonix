@props(['articles', 'domain'])
@unless(empty($articles))
<div class="grid grid-cols-2 text-white">
    @foreach ($articles as $article)
    <x-article.web :domain="$domain" :article="$article" />
    @endforeach
</div>
@else
<div></div>
@endunless