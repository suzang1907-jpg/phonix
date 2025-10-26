<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Project">
        <pages-admin-project-edit :project='@vue($project)'></pages-admin-project-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>
