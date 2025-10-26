@props(['page' => null])
<x-layout.amp :page="$page">
    <x-navbar.amp :page="$page" />
    <div class="max-w-screen-sm mx-auto">
        <x-support-banner :domain="$page->domain()" :amp="true" />
    </div>
    <div class="max-w-screen-sm mx-auto">
        <x-article.amp.grid :page="$page" :domain="$page->domain()" :articles="$page->getData('articles')" />
    </div>
    <div class="max-w-screen-sm p-2 mx-auto">
        @unless (empty($page->getData('story')))
            <x-story.amp.grid.item :domain="$page->domain()" :story="$page->getData('story')" />
        @else
            <x-story.amp.grid :domain="$page->domain()" :stories="$page->getData('stories')" />
        @endunless
        <x-keyword.amp.grid :domain="$page->domain()" :amp="true" />
        <x-map.amp />
    </div>
</x-layout.amp>
