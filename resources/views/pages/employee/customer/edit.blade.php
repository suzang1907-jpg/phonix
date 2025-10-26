<x-layout.employee :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-2">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Müşteri düzenle</h2>
            <a href="{{ route('employee.customer.list') }}">
                <button class="btn">Geri</button>
            </a>
        </div>   
        <pages-employee-customer-edit :customer='@vue($customer)'></pages-employee-customer-edit>

   <components-table :fields='["Renew", "Customer", "Info", "Contact", "Premium", "Analytics", ""]' class="p-2" title="Articles" :collection='@vue($customer->articles)' item="components-employee-article-table-item">
        </components-table>


<a class="btn btn-sm btn-error" href="{{ route('employee.customer.destroy', ['id' => $customer->id]) }}">Müşteriyi sil</a>
    </div>
</x-layout.employee>
