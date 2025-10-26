<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit blog">
        <pages-admin-blog-edit :blog='@json($blog->vue())'></pages-admin-blog-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>