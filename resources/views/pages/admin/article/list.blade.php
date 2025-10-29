<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.articles') }}">
        <x-slot name="topbar">
            <div class="flex flex-row gap-2">
                <bs-link-solid size="sm" href="{{ route('admin.article.analytics') }}">
                    {{ __('base.analytics') }}
                </bs-link-solid>
                <bs-link-solid size="sm" href="{{ route('admin.article.duplicate') }}">
                    {{ __('base.new_article') }}
                </bs-link-solid>
            </div>
        </x-slot>
        <div class="breadcrumbs text-xs p-2">
            <ul>
                <li><a href="{{ route('admin.dashboard.show') }}">{{ __('base.dashboard') }}</a></li>
                <li>{{ __('base.articles') }}</li>
            </ul>
        </div>
        <components-table
            :fields='["{{ __('base.renewal') }}", "{{ __('base.customer') }}", "{{ __('base.info') }}",
                "{{ __('base.contact') }}", "{{ __('base.analytics') }}", ""
            ]'
            class="p-2" title="{{ __('base.articles') }}" :collection='@vue($articles)'
            item="components-admin-article-table-item">
        </components-table>
    </x-layout.admin.sidebar>
</x-layout.admin>
