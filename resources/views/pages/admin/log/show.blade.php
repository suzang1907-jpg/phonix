<x-layout.admin :page="$page">
    <x-layout.admin.sidebar :page="$page" title="Project">
        <div class="overflow-x-scroll">
            <p class="text-sm">
                <pre>
                {{ $log_file }}
            </pre>
            </p>
        </div>
    </x-layout.admin.sidebar>
</x-layout.admin>
