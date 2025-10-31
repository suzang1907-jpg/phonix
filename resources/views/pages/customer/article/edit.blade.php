<x-layout.customer :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-6">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">{{ __('base.edit_article') }}</h2>
        </div>
        <pages-customer-article-edit :article='@vue($article)'></pages-customer-article-edit>
    </div>
    <div class="py-12"></div>
</x-layout.customer>