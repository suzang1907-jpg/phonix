<?=
'<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<rss version="2.0">
    <channel>
        <title>{{ $domain->getName() . ' Articles' }}</title>
        <link>{{ route('file.rss.articles') }}</link>
        <description>{{ $domain->keywordsToString() }}</description>
        <language>tr</language>
        <pubDate>{{ now() }}</pubDate>

        @foreach ($articles as $article)
            <item>
                <title>
                    {{ $article->title }}
                </title>
                <link>{{ App\Routing\Web::route('web.article.show', ['id' => $article->id]) }}</link>
                <description>
                    {!! $article->description !!}
                </description>
                <category>{{ $domain->getName() }}</category>
                <author>
                    {{ $domain->getName() }}
                </author>
                <guid>{{ $article->id }}</guid>
                <pubDate>{{ $article->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
