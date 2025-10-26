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
        @unless (empty($page->getData('blog')))
        <article class="border border-border rounded-md w-full h-full bg-background">
            <div class="flex flex-col p-2">
                @php
                $blogContent = $page->getData('blog')->getFormattedContent();
                @endphp
                @unless (empty($blogContent))
                <h2 class="font-bold">{{ $page->getData('blog')->title }}</h2>
                <p class="mt-2 text-sm">
                    {!! $blogContent !!}
                </p>
                @else
                <h2 class="font-bold">{{ $page->getData('blog')->title }}</h2>
                <p class="mt-2 text-sm">{{ $page->getData('blog')->blogContentDescription() }}</p>
                @endunless
                <p class="text-xs mt-2">{{ Carbon\Carbon::parse($page->getData('blog')->created_at)->format('d.m.Y') }}
                </p>
            </div>
        </article>
        @else
        <x-blog.amp.grid :domain="$page->domain()" :blogs="$page->getData('blogs')" />
        @endunless
        <x-keyword.amp.grid :domain="$page->domain()" :amp="true" />
        <x-map.amp />
    </div>
</x-layout.amp>