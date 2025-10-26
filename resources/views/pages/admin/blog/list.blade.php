<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" :title="__('base.posts')">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid href="{{ route('admin.blog.create') }}" size="sm">
                New blog
            </bs-link-solid>
            <bs-link-solid class="ml-2" size="sm" href="{{ route('admin.blog.import.show') }}">Import
                blogs</bs-link-solid>
        </x-slot>
        <components-list class="p-2" title="{{ __('base.posts') }}" :collection='@vue($blogs)' item="components-admin-blog-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>