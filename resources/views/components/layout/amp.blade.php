@props(['page' => null, 'advertise' => false, 'ampiframe' => true])
<!DOCTYPE html>
<html ⚡ lang="{{ $page->htmlLang() }}" class="no-scroll-bar">

<head>
    {!! $page->head() !!}
    <meta name="color-scheme" content="light only">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <x-layout.head.rich-content.article :domain="$page->domain()" :article="$page->getData('article')" />
    <x-layout.head.rich-content.articles :domain="$page->domain()" :articles="$page->getData('articles')" />
    <x-layout.head.rich-content.blog :domain="$page->domain()" :blog="$page->getData('blog')" />
    <x-layout.head.rich-content.blogs :domain="$page->domain()" :blogs="$page->getData('blogs')" />
    <x-layout.head.rich-content.story :domain="$page->domain()" :story="$page->getData('story')" />
    <x-layout.head.rich-content.stories :domain="$page->domain()" :stories="$page->getData('stories')" />
    @if ($ampiframe)
        <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    @endif
    <script async custom-element="amp-anim" src="https://cdn.ampproject.org/v0/amp-anim-0.1.js"></script>
    <script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    @guest
        @unless (empty($page->project()->google_tag))
            <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
        @endunless
    @endguest

    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none;
            }
        </style>
    </noscript>
    <x-styles.amp.boilerplate />
    {!! new \App\Resources\Amp\Css()->renderAsTag() !!}
</head>

<body class="no-scroll-bar bg-base-200" data-theme="amptheme">
    @guest
        @unless (empty($page->project()->google_tag))
            <x-layout.amp.analytics :project="$page->project()" />
        @endunless
    @endguest
    @unless (empty($page->getData('article')))
        <amp-pixel
            src="{{ \App\Routing\Amp::route('amp.article.pingback', ['article_id' => $page->getData('article')->id]) }}"
            layout="nodisplay"></amp-pixel>
    @endunless

    {{ $slot }}
    <x-footer.amp :domain="$page->domain()" />
</body>

</html>
