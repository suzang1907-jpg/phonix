<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Analytics">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid size="sm" href="{{ route('admin.article.list') }}">
                Back
            </bs-link-solid>
        </x-slot>
        <pages-admin-article-analytics :articles='@vue($articles)'></pages-admin-article-analytics>
    </x-layout.admin.sidebar>
</x-layout.admin>