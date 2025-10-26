<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Cities">
        <components-list class="p-2" title="Cities" :collection='@vue($cities)' item="components-admin-city-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>