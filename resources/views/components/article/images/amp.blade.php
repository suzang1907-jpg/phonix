@props(['domain' => null, 'article' => null])
@unless(empty($article->images))
<div class="grid grid-cols-2 gap-2 p-2">
    @foreach($article->images ?? [] as $articleImage)
    <div class="w-full h-full min-h-48 article-aspect relative">
        <amp-img class="object-cover w-full h-full cover amp-image-rounded" layout="fill" alt="{{ $article->title }}" src="{{ route('file.article.image', ['id' => $article->id, 'image_id' => $articleImage->id])  }}"></amp-img>
    </div>
    @endforeach
</div>
@else
<div></div>
@endunless