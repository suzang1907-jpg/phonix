<x-layout.customer :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-6">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">İlanı düzenle</h2>
        </div>
        <pages-customer-article-edit-external :article='@vue($article)' :password='@vue($page->getData("article_edit_password"))'></pages-customer-article-edit-external>
    </div>
    <div class="py-12"></div>
</x-layout.customer>