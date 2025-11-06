@props(['page', 'title' => null])

<components-admin-layout current="{{ url()->current() }}" title="{{ $page->title() }}"
    project="{{ route('admin.project.edit', ['id' => $page->project()->id]) }}"
    locations="{{ route('admin.location.list') }}" sitemaps="{{ route('admin.sitemap.list') }}"
    tags="{{ route('admin.tag.list') }}" domains="{{ route('admin.domain.list') }}"
    articles="{{ route('admin.article.list') }}" dashboard="{{ route('admin.dashboard.show') }}"
    blogs="{{ route('admin.blog.list') }}" stories="{{ route('admin.story.list') }}"
    workspace="{{ route('admin.workspace.show') }}"
    customers="{{ route('admin.customer.list') }}"
    search="{{ route('admin.search.show') }}" keywords="{{ route('admin.keyword.list') }}"></components-admin-layout>
<components-admin-alert-list></components-admin-alert-list>

<div id="content" class="min-h-dvh flex flex-col bg-base-200" x-cloak>
    <div class="flex flex-row items-center justify-between p-6">
        @unless (empty($title))
            <h2 class="text-xl font-bold">{{ $title }}</h2>
        @endunless
        <div class="flex flex-row items-center">
            @isset($topbar)
                {{ $topbar }}
            @endisset
        </div>
    </div>
    {{ $slot }}
</div>
<x-footer.admin :page="$page" />
