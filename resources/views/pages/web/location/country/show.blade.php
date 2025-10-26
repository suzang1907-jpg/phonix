<x-layout.web :page="$page">
    <x-navbar.web />
    <x-search />
    <div class="mx-auto max-w-screen-xl p-2">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('web.home.show') }}">{{ __('base.homepage') }}</a></li>
                <li><a href="">{{ $page->title() }}</a></li>
            </ul>
        </div>
    </div>
    <div class="mx-auto max-w-screen-xl p-2">
        <x-blog.web.grid :domain="$domain" :blogs="$blogs" />
        <x-map.web/>
        <x-tag.web.all :page="$page" />
        <x-keyword.web.grid :domain="$domain" :location="$location" />
        <x-location.grid />
        <x-referal-domains :domain="$domain"/>
    </div>
    <x-footer.web :domain="$domain" />
</x-layout.web>