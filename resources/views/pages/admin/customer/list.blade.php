<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.customers') }}">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid size="sm" href="{{ route('admin.customer.create') }}">
                {{ __('base.new_customer') }}
            </bs-link-solid>
        </x-slot>
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">{{ __('base.dashboard') }}</a></li>
                <li>{{ __('base.customers') }}</li>
            </ul>
        </div>
        <components-list class="p-2" title="{{ __('base.customers') }}" :collection='@vue($customers)'
            item="components-admin-customer-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>
