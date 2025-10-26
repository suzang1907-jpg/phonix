<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Google Integrations">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid size="sm" href="{{ route('admin.googleintegration.create') }}">New Google
                Integration</bs-link-solid>
        </x-slot>
        <components-list class="p-2" title="Google Integrations" :collection='@vue($google_integrations)'
            item="components-admin-googleintegration-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>
