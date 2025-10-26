@props(['blogs', 'domain'])
@unless (empty($blogs))
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
        @foreach ($blogs as $blog)
            <x-blog.web.grid.item :domain="$domain" :blog="$blog" />
        @endforeach
    </div>
    <x-paginator :collection="$blogs" />
@else
    <div></div>
@endunless
