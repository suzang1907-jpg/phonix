<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Sites">
        <components-list class="p-2" title="Sites" :collection='@vue($sites)' item="components-admin-site-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>