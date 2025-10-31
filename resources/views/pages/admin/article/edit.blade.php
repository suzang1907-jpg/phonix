<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.edit_article') }}">

        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">{{ __('base.dashboard') }}</a></li>
                <li><a href="{{ route('admin.article.list') }}">{{ __('base.articles') }}</a></li>
                <li>{{ __('base.edit') }}</li>
            </ul>
        </div>

        <div class="bg-base-100 flex flex-col w-full pb-2">
            <div class="flex flex-col p-2 max-w-xl mx-auto w-full">
                @unless (empty($article_customer))
                    <div>
                        <a class="btn btn-sm w-full" href="{{ route('admin.customer.edit', ['id' => $article_customer->id]) }}"
                            target="_self">{{ __('base.edit_customer') }}</a>
                    </div>
                    <div>
                        <a class="btn btn-sm mt-2 w-full"
                            href="https://wa.me/{{ str_replace(' ', '', $article_customer->whatsapp_phone_number) }}"
                            target="_blank">{{ __('base.open_in_whatsapp') }}</a>
                    </div>
                @endunless
            </div>

            <pages-admin-article-edit
                @unless (empty($article_customer)) :customer='@vue($article_customer)' @endunless
                :article='@vue($article)'></pages-admin-article-edit>
        </div>

    </x-layout.admin.sidebar>
</x-layout.admin>
