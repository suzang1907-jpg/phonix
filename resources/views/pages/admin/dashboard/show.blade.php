<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.dashboard') }}">
        @if ($log_file_has_content)
        <div class="bg-error text-white p-1">
            <p class="text-center">
                <a href="{{ route('admin.log.show') }}">
                    The log file is not empty, there may be problems
                </a>
            </p>
        </div>
        @endif
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6">
            <div class="stats shadow stats-vertical md:stats-horizontal">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-bolt" />
                    </div>
                    <div class="stat-title">{{ __('base.articles') }}</div>
                    <div class="stat-value">{{ $article_count }}</div>
                    <div class="stat-desc">
                        <a href="{{ route('admin.article.list') }}">
                            List all
                        </a>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-newspaper" />
                    </div>
                    <div class="stat-title">{{ __('base.posts') }}</div>
                    <div class="stat-value">{{ $blog_count }}</div>
                    <div class="stat-desc">
                        <a href="{{ route('admin.blog.list') }}">
                            List all
                        </a>
                    </div>
                </div>
            </div>
            <div class="stats shadow stats-vertical md:stats-horizontal">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-link" />
                    </div>
                    <div class="stat-title">Google Integrations</div>
                    <div class="stat-value">{{ $google_integration_count }}</div>
                    <div class="stat-desc">
                        <a href="{{ route('admin.googleintegration.list') }}">
                            List all
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6">
            <div class="border-border border rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="{{ __('base.customers') }}"
                    :collection='@vue($latest_customers)' item="components-admin-customer-list-item">
                </components-list>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.customer.list') }}"
                    class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>
            <div class="border-border border rounded-md flex flex-col">
                <components-table :paginate="false" class="p-2" title="{{ __('base.articles') }}"
                    :collection='@vue($latest_articles)' item="components-admin-article-table-item" :fields='["Renew", "Customer", "Info", "Contact", "Premium", "Analytics", ""]'>
                </components-table>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.article.list') }}"
                    class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>

            <div class="border-border border rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="{{ __('base.websites') }}"
                    :collection='@vue($latest_sites)' item="components-admin-site-list-item">
                </components-list>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.site.list') }}"
                    class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>
        </div>
        <div class="p-2 text-sm flex flex-col gap-2 items-start">
            <bs-link-solid href="{{ route('admin.location.map.create') }}" size="xs">
                Add Map
            </bs-link-solid>
            @unless (empty($page->workspace()))
            <p>Workspace ID: {{ $page->workspace()->id }}</p>
            @endunless
            <p>Project ID: {{ $page->project()->id }}</p>
            <p>User Email: {{ auth()->user()->email }}</p>
            <p>User ID: {{ auth()->user()->id }}</p>
            <p>Cloudflare Sync:
                {{ $cloudflare_syncing_state == 'none' ? 'None' : ($cloudflare_syncing_state == 'queued' ? 'Queued' : 'Running') }}
            </p>
            <p>{{ now()->toString() }}</p>
            @if ($cloudflare_syncing_state == 'none')
            <bs-link-solid href="{{ route('admin.workspace.cloudflare.sync') }}" size="xs">
                Start sync
            </bs-link-solid>
            @endif
            <p>Total images: {{ $images_count }}</p>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>