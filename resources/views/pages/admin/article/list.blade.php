<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Articles">
        <x-slot name="topbar">
            <div class="flex flex-row gap-2">
                <bs-link-solid size="sm" href="{{ route('admin.article.analytics') }}">
                    Analytics
                </bs-link-solid>
                <bs-link-solid size="sm" href="{{ route('admin.article.duplicate') }}">
                    New article
                </bs-link-solid>
            </div>
        </x-slot>
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">Dashboard</a></li>
                <li>Articles</li>
            </ul>
        </div>
        <components-table :fields='["Renew", "Customer", "Info", "Contact", "Premium", "Analytics", ""]' class="p-2" title="Articles" :collection='@vue($articles)' item="components-admin-article-table-item">
        </components-table>
    </x-layout.admin.sidebar>
</x-layout.admin>
