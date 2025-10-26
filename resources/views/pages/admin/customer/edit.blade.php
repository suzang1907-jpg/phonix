<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit customer">
        <pages-admin-customer-edit :customer='@vue($customer)'></pages-admin-customer-edit>
                <bs-link-solid class="mt-6 mb-6" size="sm" href="{{ route('admin.article.duplicate', ['customer_id' => $customer->id]) }}">
                    New article
                </bs-link-solid>
   <components-table :fields='["Renew", "Customer", "Info", "Contact", "Premium", "Analytics", ""]' class="p-2" title="Articles" :collection='@vue($customer->articles)' item="components-admin-article-table-item">
        </components-table>

<bs-link-solid size="sm" class="mt-6 mb-6" href="{{ route('admin.customer.destroy', ['id' => $customer->id]) }}">Delete Customer</bs-link-solid>

    </x-layout.admin.sidebar>
</x-layout.admin>
