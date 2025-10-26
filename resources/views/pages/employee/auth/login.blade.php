<x-layout.employee :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-6">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Müşteri Girişi</h2>
        </div>
        <pages-employee-auth-login ei="{{ $page->getData('ei')}}" password="{{ $page->getData('ep') ?? ''}}"></pages-employee-auth-login>
    </div>
    <div class="py-12"></div>
</x-layout.employee>
