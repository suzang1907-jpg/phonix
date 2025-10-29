<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.edit_customer') }}">
        <pages-admin-customer-edit :customer='@vue($customer)'></pages-admin-customer-edit>
        <bs-link-solid class="mt-6 mb-6" size="sm"
            href="{{ route('admin.article.duplicate', ['customer_id' => $customer->id]) }}">
            {{ __('base.new_article') }}
        </bs-link-solid>
        <components-table
            :fields='["{{ __('base.renewal') }}", "{{ __('base.customer') }}", "{{ __('base.info') }}",
                "{{ __('base.contact') }}", "{{ __('base.analytics') }}", ""
            ]'
            class="p-2" title="{{ __('base.articles') }}" :collection='@vue($customer->articles)'
            item="components-admin-article-table-item">
        </components-table>

        <bs-link-solid size="sm" class="mt-6 mb-6"
            href="{{ route('admin.customer.destroy', ['id' => $customer->id]) }}">{{ __('base.delete_customer') }}</bs-link-solid>

    </x-layout.admin.sidebar>
</x-layout.admin>
