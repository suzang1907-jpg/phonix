@props(['blog' => null])

<article class="border border-border rounded-md w-full h-full bg-background">
    <div class="flex flex-col p-2">
        <a class="font-bold link-blog-listener" href="{{ App\Routing\Amp::route('amp.blog.show', ['id' => $blog->id]) }}">
            {{ strlen($blog->title) > 50 ? mb_substr($blog->title, 0, 50) . '...' : $blog->title }}
        </a>
        <p class="text-sm">
            {{ $blog->short_description }}
        </p>
    </div>
</article>
