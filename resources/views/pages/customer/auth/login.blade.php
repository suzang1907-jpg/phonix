<x-layout.customer :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-6">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">Müşteri Girişi</h2>
        </div>
        <pages-customer-auth-login ci="{{ $page->getData('ci')}}" password="{{ $page->getData('cp') ?? ''}}"></pages-customer-auth-login>
    </div>
    <div class="py-12"></div>
</x-layout.customer>