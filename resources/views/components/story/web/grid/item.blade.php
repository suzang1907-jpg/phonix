@props(['story' => null])

<article class="w-full h-full bg-background">
    <div class="p-2">
        <img loading="lazy" decoding="async" class="w-full aspect-square rounded-xl object-cover" alt="{{ $story->title }}"
            src="{{ route('file.story.image.main', ['id' => $story->id]) }}" />
    </div>
    <div class="flex flex-col p-2">
        <a class="font-bold line-clamp-2" href="{{ App\Routing\Web::route('web.story.show', ['id' => $story->id]) }}">
            {{ strlen($story->title) > 50 ? mb_substr($story->title, 0, 50) . '...' : $story->title }}
        </a>
        <p class="text-sm line-clamp-2">
            {{ strlen($story->description) > 100 ? mb_substr($story->description, 0, 100) . '...' : $story->description }}
        </p>
    </div>
</article>
