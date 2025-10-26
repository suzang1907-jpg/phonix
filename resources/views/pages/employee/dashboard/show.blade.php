<x-layout.employee :page="$page">
<div id="content" class="px-2">

<div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Anasayfa</h2>
<div class="flex flex-row items-center justify-end gap-2">
            <a class="btn btn-sm" href="{{ route('employee.customer.list') }}">
                Müşteriler
            </a>
<a class="btn btn-sm" href="{{ route('employee.article.create') }}">İlan oluştur</a>
</div>
        </div>  
<components-table :fields='["Yenileme", "Müşteri", "Info", "İletişim", "Premium", "Diğer", ""]' class="p-2" title="İlanlar" :collection='@vue($articles)' item="components-employee-article-table-item" >  
 </components-table>
</div>
</x-layout.employee>
