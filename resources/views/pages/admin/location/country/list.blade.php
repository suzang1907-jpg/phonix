<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Countries">
        <components-list class="p-2" title="Countries" :collection='@vue($countries)' item="components-admin-country-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>