<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" :title="__('base.stories')">
        <x-slot name="topbar" class="flex flex-row">
            <bs-link-solid href="{{ route('admin.story.create') }}" size="sm">
                New story
            </bs-link-solid>
            <bs-link-solid class="ml-2" size="sm" href="{{ route('admin.story.import.show') }}">Import stories
            </bs-link-solid>
        </x-slot>
        <components-list class="p-2" title="{{ __('base.stories') }}" :collection='@vue($stories)' item="components-admin-story-list-item">
        </components-list>
    </x-layout.admin.sidebar>
</x-layout.admin>