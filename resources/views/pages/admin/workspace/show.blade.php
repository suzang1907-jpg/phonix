<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Workspace">
        <x-slot name="topbar">
            <div class="flex flex-row gap-2">
                <bs-link-solid size="sm" href="{{ route('admin.workspace.cache.clear') }}">
                    Clear Cache
                </bs-link-solid>
                <bs-link-solid size="sm" href="{{ route('admin.workspace.edit') }}">
                    Settings
                </bs-link-solid>
            </div>
        </x-slot>
        <components-list class="p-2" title="Workspaces" :collection='@vue($workspaces)' item="components-admin-workspace-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>