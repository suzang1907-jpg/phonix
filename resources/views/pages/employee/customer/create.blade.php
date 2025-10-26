<x-layout.employee :page="$page">
<div id="content" class="min-h-dvh flex flex-col px-2">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Müşteri oluştur</h2>
            <a href="{{ route('employee.customer.list') }}">
                <button class="btn">Geri</button>
            </a>
        </div>   
        <pages-employee-customer-create></pages-employee-customer-create>
  </div>
</x-layout.employee>
