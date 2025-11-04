@props(['blog' => null])

<article class="blog-item">
    <a class="link-blog-listener" href="{{ App\Routing\Amp::route('amp.blog.show', ['id' => $blog->id]) }}">
        {{ strlen($blog->title) > 50 ? mb_substr($blog->title, 0, 50) . '...' : $blog->title }}
    </a>
    <p>
        {{ $blog->short_description }}
    </p>
</article>
