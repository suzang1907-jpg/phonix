<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Keywords">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid size="sm" href="{{ route('admin.keyword.create') }}">New keyword</bs-link-solid>
            <bs-link-solid class="ml-2" size="sm" href="{{ route('admin.keyword.import.show') }}">Import keywords
            </bs-link-solid>
        </x-slot>
        <components-list class="p-2" title="Keywords" :collection='@vue($keywords)'
            item="components-admin-keyword-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>
