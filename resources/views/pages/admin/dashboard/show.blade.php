<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.dashboard') }}">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6">
            <div class="stats shadow stats-vertical md:stats-horizontal">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                    </div>
                    <div class="stat-title">{{ __('base.customers') }}</div>
                    <div class="stat-value">{{ $customer_count }}</div>
                    <div class="stat-desc">
                        <a href="{{ route('admin.customer.list') }}">
                            {{ __('base.list_all') }}
                        </a>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-bolt" />
                    </div>
                    <div class="stat-title">{{ __('base.articles') }}</div>
                    <div class="stat-value">{{ $article_count }}</div>
                    <div class="stat-desc">
                        <a href="{{ route('admin.article.list') }}">
                            {{ __('base.list_all') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="stats shadow stats-vertical md:stats-horizontal">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                    </div>
                    <div class="stat-title">Ziyaretciler 30 DK</div>
                    <div class="stat-value">{{ $analytics['active_users'] }}</div>
                    <div class="stat-desc">
                        <a href="https://analytics.google.com/analytics/web/#">
                            Google Analytics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6">
            <div class="card card-border border-base-300 bg-base-100 rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="{{ __('base.customers') }}"
                    :collection='@vue($latest_customers)' item="components-admin-customer-list-item">
                </components-list>
                <div class="flex grow flex-col items-start justify-end p-2">
                    <a href="{{ route('admin.customer.list') }}" class="btn btn-sm">
                        {{ __('base.list_all') }}
                    </a>
                </div>

            </div>
            <div class="card card-border border-base-300 bg-base-100 rounded-md flex flex-col">
                <components-table :paginate="false" class="p-2" title="{{ __('base.articles') }}"
                    :collection='@vue($latest_articles)' item="components-admin-article-table-item"
                    :fields='["{{ __('base.renewal') }}", "{{ __('base.customer') }}", "{{ __('base.info') }}",
                        "{{ __('base.contact') }}", "{{ __('base.analytics') }}", ""
                    ]'>
                </components-table>
                <div class="flex grow flex-col items-start justify-end p-2">
                    <a href="{{ route('admin.article.list') }}" class="btn btn-sm">
                        {{ __('base.list_all') }}
                    </a>
                </div>
            </div>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>
