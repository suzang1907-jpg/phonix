@props(['story' => null])

<article class="border border-neutral-800 rounded-md w-full h-full bg-neutral-900">
    <div class="p-2">
        <div class="relative w-full h-48">
            <amp-img layout="fill" class="w-full h-48 object-cover cover" alt="{{ $story->title }}"
                src="{{ route('file.story.image.main', ['id' => $story->id]) }}" />
        </div>
    </div>
    <div class="flex flex-col p-2">
        <a class="font-bold" href="{{ App\Routing\Amp::route('amp.story.show', ['id' => $story->id]) }}">
            {{ strlen($story->title) > 50 ? mb_substr($story->title, 0, 50) . '...' : $story->title }}
        </a>
        <p class="text-sm">
            {{ strlen($story->description) > 100 ? mb_substr($story->description, 0, 100) . '...' : $story->description }}
        </p>
    </div>
</article>
