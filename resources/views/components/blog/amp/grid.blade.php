@props(['blogs', 'domain'])
@unless (empty($blogs))
    <div class="blog-post-list">
        @foreach ($blogs as $blog)
            <x-blog.amp.grid.item :domain="$domain" :blog="$blog" />
        @endforeach
    </div>
@else
    <div></div>
@endunless
