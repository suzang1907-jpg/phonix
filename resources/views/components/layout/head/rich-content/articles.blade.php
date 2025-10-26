@props(['domain' => null, 'articles' => null])
@unless(empty($articles))
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "ItemList",
        "name": "Articles",
        "itemListElement": [
            @foreach($articles as $index => $article) {
                "@type": "ListItem",
                "position": "{{$index + 1}}",
                "item": {
                    "@context": "http://schema.org",
                    "@type": "Article",
                    "mainEntityOfPage": {
                        "@type": "WebPage",
                        "@id": "{{ route('web.article.show', ['id'=>$article->id]) }}"
                    },
                    "headline": "{{ $article->title }}",
                    "image": {
                        "@type": "ImageObject",
                        "url": "{{ route('file.article.main.image', ['id' => $article->id]) }}",
                        "height": 800,
                        "width": 800
                    },
                    "datePublished": "{{ $article->created_at }}",
                    "dateModified": "{{ $article->updated_at }}",
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
                    "description": "{{ $article->description }}",
                    "inLanguage": "tr",
                    "articleBody": "{{ $article->description }}"
                }
            }
            @unless($loop->last), @endunless
            @endforeach
        ]
    }
</script>
@endunless