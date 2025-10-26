<x-layout.employee :page="$page">
    <div id="content" class="min-h-dvh flex flex-col px-2">
        <div class="flex flex-row items-center justify-between py-6">
            <h2 class="text-xl font-bold">İlanı düzenle</h2>
        </div>
@php
$article_customer = $article->customer;
@endphp
        <pages-employee-article-edit @unless(empty($article_customer)) :customer='@vue($article_customer)' @endunless  :article='@vue($article)'></pages-employee-article-edit>
    </div>
    <div class="py-12"></div>
</x-layout.employee>
