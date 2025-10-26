<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Workspace / Edit">
        <pages-admin-workspace-edit :workspace='@vue($workspace)'></pages-admin-workspace-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>