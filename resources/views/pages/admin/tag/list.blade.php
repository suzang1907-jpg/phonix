<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Tags">
        <x-slot name="topbar" class="flex flex-row">
            <components-link-primary href="{{ route('admin.tag.create') }}">New tag</components-link-primary>
        </x-slot>
        <components-list class="p-2" title="Tags" :collection='@vue($tags)' item="components-admin-tag-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>