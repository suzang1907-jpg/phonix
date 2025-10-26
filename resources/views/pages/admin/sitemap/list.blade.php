<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Sitemaps">
        <components-list class="p-2" title="Sitemaps" :collection='@vue($domains)' item="components-admin-sitemap-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>