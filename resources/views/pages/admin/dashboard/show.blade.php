<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="{{ __('base.dashboard') }}">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-2">
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
                    <div class="stat-title">Ziyaretciler 30 DK</div>
                    @if ($analytics['active_users']['status'] == 'done')
                        @if ($analytics['active_users']['data']['value'] > 300)
                            <div class="stat-figure text-success">
                                <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                            </div>
                            <div class="stat-value text-success">
                                {{ $analytics['active_users']['data']['value'] }}
                            </div>
                        @elseif ($analytics['active_users']['data']['value'] > 200)
                            <div class="stat-figure text-warning">
                                <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                            </div>
                            <div class="stat-value text-warning">
                                {{ $analytics['active_users']['data']['value'] }}
                            </div>
                        @else
                            <div class="stat-figure text-error">
                                <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                            </div>
                            <div class="stat-value text-error">
                                {{ $analytics['active_users']['data']['value'] }}
                            </div>
                        @endif
                    @else
                        <div class="stat-figure text-error">
                            <font-awesome-icon size="xl" icon="fa-solid fa-users" />
                        </div>
                        <div class="stat-value text-error">0</div>
                    @endif
                    <div class="stat-desc">
                        <a href="https://analytics.google.com/analytics/web/#">
                            Google Analytics
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-2">
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
        <div class="grid grid-cols-1 gap-2 p-2">
            <div class="card card-border border-base-300 bg-base-100 rounded-md flex flex-col">
                <div class="p-4">
                    <h2 class="text-xl font-bold mb-4">{{ __('Upcoming Domains') }}</h2>
                    
                    @if(session('success'))
                        <div class="alert alert-success mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{ session('success') }}</span>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-error mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{ session('error') }}</span>
                        </div>
                    @endif

                    <!-- Add New Upcoming Domain Form -->
                    <div class="card bg-base-200 mb-6">
                        <div class="card-body">
                            <h3 class="card-title text-lg mb-4">Add New Upcoming Domain</h3>
                            <form action="{{ route('admin.dashboard.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                    <div class="form-control">
                                        <label class="label">
                                            <span class="label-text">Project</span>
                                        </label>
                                        <select name="project_id" class="select select-bordered w-full" required>
                                            <option value="">Select Project</option>
                                            @foreach($projects as $project)
                                                <option value="{{ $project->id }}">{{ $project->name ?? $project->id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-control">
                                        <label class="label">
                                            <span class="label-text">Domain</span>
                                        </label>
                                        <input type="text" name="domain" placeholder="example.com" class="input input-bordered w-full" required />
                                    </div>
                                    
                                    <div class="form-control">
                                        <label class="label">
                                            <span class="label-text">Release Date</span>
                                        </label>
                                        <input type="date" name="date" class="input input-bordered w-full" min="{{ date('Y-m-d') }}" required />
                                    </div>
                                </div>
                                
                                <div class="form-control">
                                    <button type="submit" class="btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Add Upcoming Domain
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Upcoming Domains List -->
                    @if($upcoming_domains->isEmpty())
                        <p class="text-gray-500">No upcoming domains found.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="table table-zebra w-full">
                                <thead>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Domain</th>
                                        <th>Release Date</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($upcoming_domains as $upcomingDomain)
                                        <tr>
                                            <td>{{ $upcomingDomain->project_id }}</td>
                                            <td>{{ $upcomingDomain->domain }}</td>
                                            <td>{{ \Carbon\Carbon::parse($upcomingDomain->date)->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($upcomingDomain->created_at)->format('M d, Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>
