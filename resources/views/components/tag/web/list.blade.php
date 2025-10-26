@props(['tag'])
<div class="flex flex-col mt-2">
    <h2 class="text-2xl font-bold">{{ $tag['tag']->tag }}</h2>
    <div class="flex flex-row overflow-x-scroll no-scroll-bar mt-2">
        @foreach($tag['data'] as $item)
        <div class="flex w-full md:w-1/2 lg:w-1/4 flex-shrink-0 mr-2">
            <x-blog.web.grid.item :blog="$item" />
        </div>
        @endforeach
    </div>
</div>