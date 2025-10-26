<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Create tag">
        <pages-admin-tag-create :conditions='@json(App\Constants\TagCondition::conditions())'></pages-admin-tag-create>
    </x-layout.admin.sidebar>
</x-layout.admin>