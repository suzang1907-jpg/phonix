@props(['domain' => null, 'story' => null])
@unless(empty($story))
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ route('web.story.show', ['id'=>$story->id]) }}"
        },
        "headline": "{{ $story->title }}",
        "image": {
            "@type": "ImageObject",
            "url": "{{ asset($story->main_image) }}",
            "height": 800,
            "width": 800
        },
        "datePublished": "{{ $story->created_at }}",
        "dateModified": "{{ $story->updated_at }}",
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
        "description": "{{ $story->description }}",
        "inLanguage": "tr",
        "articleBody": "{{ $story->description }}"
    }
</script>
@endunless