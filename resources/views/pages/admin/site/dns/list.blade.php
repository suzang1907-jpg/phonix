<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="DNS Records">
        <components-list class="p-2" title="DNS Records" :collection='@vue($dns_records)' item="components-admin-dnsrecord-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>