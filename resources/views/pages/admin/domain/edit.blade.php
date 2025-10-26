<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit domain">
        <pages-admin-domain-edit :domainmodel='@json($domainToEdit->vue())'></pages-admin-domain-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>