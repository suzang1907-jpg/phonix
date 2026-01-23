<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit domain">
        <pages-admin-domain-edit :domainmodel='@json($domainToEdit->vue())'></pages-admin-domain-edit>
<p>Project ID: {{ $domainToEdit->site->project_id }}</p>
<p>Project Name: {{ $domainToEdit->site->project->name }}</p>
    </x-layout.admin.sidebar>
</x-layout.admin>
