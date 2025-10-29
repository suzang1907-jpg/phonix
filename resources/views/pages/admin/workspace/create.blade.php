<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Workspace / Create">
        <pages-admin-workspace-create :project='@vue($project)'></pages-admin-workspace-create>
    </x-layout.admin.sidebar>
</x-layout.admin>
