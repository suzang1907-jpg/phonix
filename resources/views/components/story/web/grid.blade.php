@props(['stories', 'domain'])
@unless (empty($stories))
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach ($stories as $story)
            <x-story.web.grid.item :domain="$domain" :story="$story" />
        @endforeach
    </div>
    <x-paginator :collection="$stories" />
@else
    <div></div>
@endunless
