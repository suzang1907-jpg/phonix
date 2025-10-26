<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Domains">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid size="sm" href="{{ route('admin.domain.create') }}">New domain</bs-link-solid>
            <bs-link-solid class="ml-2" size="sm" href="{{ route('admin.domain.import.show') }}">Import domains</bs-link-solid>
        </x-slot>
        <components-list class="p-2" title="Domains" :collection='@vue($domains)' item="components-admin-domain-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>