<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit article">
      
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.article.list') }}">Articles</a></li>
                <li>Edit</li>
            </ul>
        </div>
      
@unless(empty($article_customer))
<bs-link-solid class="btn-sm" href="{{route('admin.customer.edit',['id'=> $article_customer->id])}}" target="_self">Edit Customer</bs-link-solid>
<bs-link-solid class="btn-sm mt-6" href="https://wa.me/{{str_replace(' ', '', $article_customer->whatsapp_phone_number)}}" target="_blank">WhatsApp Message</bs-link-solid>
@endunless

        <pages-admin-article-edit @unless(empty($article_customer)) :customer='@vue($article_customer)' @endunless :article='@vue($article)'></pages-admin-article-edit>

    </x-layout.admin.sidebar>
</x-layout.admin>
