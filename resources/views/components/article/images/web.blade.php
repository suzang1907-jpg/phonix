@props(['domain' => null, 'article' => null])
@unless(empty($article->images))
<div class="grid grid-cols-2 gap-1">
    @foreach($article->images ?? [] as $articleImage)
    <div class="w-full h-full min-h-48 aspect-[9/12] relative">
        <img loading="lazy" decoding="async" class="object-cover w-full h-full" alt="{{ $article->title }}" src="{{ route('file.article.image', ['id' => $article->id, 'image_id' => $articleImage->id])  }}"></img>
    </div>
    @endforeach
</div>
@else
<div></div>
@endunless