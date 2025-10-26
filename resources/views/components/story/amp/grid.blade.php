@props(['stories', 'domain'])
@unless (empty($stories))
    <div class="mt-12 grid grid-cols-1 gap-2">
        @foreach ($stories as $story)
            <x-story.amp.grid.item :domain="$domain" :story="$story" />
        @endforeach
    </div>
@else
    <div></div>
@endunless
