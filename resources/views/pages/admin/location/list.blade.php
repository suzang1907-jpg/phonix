<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Locations">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-2 p-6">
            <div class="border-border border rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="Countries" :collection='@vue($latest_countries)' item="components-admin-country-list-item">
                </components-list>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.location.country.list') }}" class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>
            <div class="border-border border rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="City" :collection='@vue($latest_cities)' item="components-admin-city-list-item">
                </components-list>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.location.city.list') }}" class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>
            <div class="border-border border rounded-md flex flex-col">
                <components-list :paginate="false" class="p-2" title="District" :collection='@vue($latest_districts)' item="components-admin-district-list-item">
                </components-list>
                <div class="flex flex-grow"></div>
                <a href="{{ route('admin.location.district.list') }}" class="rounded-b-md px-3 py-1 bg-base-100 text-invert select-none cursor-pointer text-center text-sm">
                    Show more
                </a>
            </div>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>