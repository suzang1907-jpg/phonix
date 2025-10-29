<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Workspace">
        <x-slot name="topbar">
            <div class="flex flex-row gap-2">
                <a class="btn" href="{{ route('admin.workspace.edit') }}">
                    Settings
                </a>
            </div>
        </x-slot>
        <components-list class="p-2" title="Workspaces" :collection='@vue($workspaces)' item="components-admin-workspace-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>