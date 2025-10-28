@props(['page' => null])
<!DOCTYPE html>
<html lang="{{ $page->htmlLang() }}" class="no-scroll-bar">

<head>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    {!! $page->head() !!}
    <meta name="Rating" content="general">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="audience" content="all">
    <meta name="classification" content="business">
    <meta name="content-language" content="{{ App\Services\LocalizationService::languageMeta() }}">
    <meta name="distribution" content="Global">
    <link rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.tr">
    <link rel="sitemap" type="application/xml" href="{{ App\Routing\File::route('file.sitemap.show') }}" title="Sitemap"/>
    <x-layout.head.rich-content.article :domain="$page->domain()" :article="$page->getData('article')" />
    <x-layout.head.rich-content.articles :domain="$page->domain()" :articles="$page->getData('articles')" />
    <x-layout.head.rich-content.blog :domain="$page->domain()" :blog="$page->getData('blog')" />
    <x-layout.head.rich-content.blogs :domain="$page->domain()" :blogs="$page->getData('blogs')" />
    <x-layout.head.rich-content.story :domain="$page->domain()" :story="$page->getData('story')" />
    <x-layout.head.rich-content.stories :domain="$page->domain()" :stories="$page->getData('stories')" />

    @vite(['resources/css/web/app.css'], 'build/web')

</head>

<body class="no-scroll-bar bg-base-200" data-theme="apptheme">
    {{ $slot }}
</body>

</html>
