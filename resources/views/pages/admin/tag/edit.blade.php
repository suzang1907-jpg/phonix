<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Edit tag">
        <pages-admin-tag-edit :tag='@json($tag)' :conditions='@json(App\Constants\TagCondition::conditions())'></pages-admin-tag-edit>
    </x-layout.admin.sidebar>
</x-layout.admin>