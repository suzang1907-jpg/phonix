<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title> {{ $domain->getName() . ' ' . __('base.stories') }} </title>
        <link> {{ route('file.rss.stories') }} </link>
        <description> {{ $domain->keywordsToString() }} </description>
        <language>tr</language>
        <pubDate>{{ now() }}</pubDate>
  
        @foreach($stories as $story)
            <item>
                <title>{{ $story->title }}</title>
                <link>{{ App\Routing\Web::route('web.story.show', ['id' => $story->id]) }}</link>
                <description>{!! $story->description !!}</description>
                <category>{{ $domain->getName() }}</category>
                <author>{{ $domain->getName() }}</author>
                <guid>{{ $story->id }}</guid>
                <pubDate>{{ $story->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>