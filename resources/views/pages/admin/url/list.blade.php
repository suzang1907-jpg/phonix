<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Urls">
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">Dashboard</a></li>
                <li>Urls</li>
            </ul>
        </div>
        <components-table :fields='["Origin", "Target"]' class="p-2" title="Urls" :collection='@vue($urls)' item="components-admin-url-table-item">
        </components-table>
    </x-layout.admin.sidebar>
</x-layout.admin>