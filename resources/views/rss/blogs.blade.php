<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title> {{ $domain->getName() . ' ' . __('base.posts') }} </title>
        <link> {{ route('file.rss.blogs') }} </link>
        <description> {{ $domain->keywordsToString() }} </description>
        <language>tr</language>
        <pubDate>{{ now() }}</pubDate>
  
        @foreach($blogs as $blog)
            <item>
                <title>{{ $blog->title }}</title>
                <link>{{ App\Routing\Web::route('web.blog.show', ['id' => $blog->id]) }}</link>
                <description>{!! $blog->blogContentDescription() !!}</description>
                <category>{{ $domain->getName() }}</category>
                <author>{{ $domain->getName() }}</author>
                <guid>{{ $blog->id }}</guid>
                <pubDate>{{ $blog->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>