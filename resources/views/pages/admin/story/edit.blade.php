<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit story">
        <pages-admin-story-edit :story='@json($story->vue())'></pages-admin-story-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>