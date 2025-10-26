@props(['blogs', 'domain'])
@unless (empty($blogs))
    <div class="mt-12 grid grid-cols-1 gap-2">
        @foreach ($blogs as $blog)
            <x-blog.amp.grid.item :domain="$domain" :blog="$blog" />
        @endforeach
    </div>
@else
    <div></div>
@endunless
