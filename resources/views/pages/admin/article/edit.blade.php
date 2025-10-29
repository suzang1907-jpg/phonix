<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.edit_article') }}">

        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">{{ __('base.dashboard') }}</a></li>
                <li><a href="{{ route('admin.article.list') }}">{{ __('base.articles') }}</a></li>
                <li>{{ __('base.edit') }}</li>
            </ul>
        </div>

        @unless (empty($article_customer))
            <bs-link-solid class="btn-sm" href="{{ route('admin.customer.edit', ['id' => $article_customer->id]) }}"
                target="_self">{{ __('base.edit_customer') }}</bs-link-solid>
            <bs-link-solid class="btn-sm mt-6"
                href="https://wa.me/{{ str_replace(' ', '', $article_customer->whatsapp_phone_number) }}"
                target="_blank">{{ __('base.whatsapp_message') }}</bs-link-solid>
        @endunless

        <pages-admin-article-edit @unless (empty($article_customer)) :customer='@vue($article_customer)' @endunless
            :article='@vue($article)'></pages-admin-article-edit>

    </x-layout.admin.sidebar>
</x-layout.admin>
