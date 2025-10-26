<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="New article">
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">Dashboard</a></li>
                <li><a href="{{ route('admin.article.list') }}">Articles</a></li>
                <li>Create</li>
            </ul>
        </div>
        <pages-admin-article-create @if($customer):customer='@vue($customer)'@endif ></pages-admin-article-create>
    </x-layout.admin.sidebar>
</x-layout.admin>
