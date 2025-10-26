<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Light Cache">
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">Dashboard</a></li>
                <li>Light Cache</li>
            </ul>
        </div>
        <components-table :fields='["URL"]' class="p-2" title="Light Cache" :collection='@vue($lights)' item="components-admin-light-table-item">
        </components-table>
    </x-layout.admin.sidebar>
</x-layout.admin>