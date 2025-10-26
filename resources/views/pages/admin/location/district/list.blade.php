<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Districts">
        <components-list class="p-2" title="Districts" :collection='@vue($districts)' item="components-admin-district-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>