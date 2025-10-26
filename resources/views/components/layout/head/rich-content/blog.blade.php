@props(['domain' => null, 'blog' => null])
@unless(empty($blog))
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ route('web.blog.show', ['id'=>$blog->id]) }}"
        },
        "headline": "{{ $blog->title }}",
        "image": {
            "@type": "ImageObject",
            "url": "{{ route('file.blog.image.main', ['id' => $blog->id]) }}",
            "height": 800,
            "width": 800
        },
        "datePublished": "{{ $blog->created_at }}",
        "dateModified": "{{ $blog->updated_at }}",
        "author": {
            "@type": "Organization",
            "name": "{{ $domain->getName() }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "{{ $domain->getName() }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ route('file.project.logo') }}",
                "width": 128,
                "height": 128
            }
        },
        "description": "{{ $blog->blogContentDescription() }}",
        "inLanguage": "tr",
        "articleBody": "{{ $blog->blogContentDescription() }}"
    }
</script>
@endunless