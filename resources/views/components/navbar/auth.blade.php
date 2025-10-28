@props(['title' => null, 'domain' => null, 'article' => null, 'city' => null, 'country' => null, 'district' => null])
<header class="flex flex-row justify-between w-full items-center p-6 border-b border-b-base-300">
    <div class="flex flex-col shrink min-w-32">
        <div class="flex flex-row items-center">
            <img loading="lazy" decoding="async" alt="Authentication" width="48px" height="48px" class="w-12 h-12 object-cover rounded-md" src="{{ route('file.project.logo', ['size' => '48']) }}" />
            <h1 class="text-start text-xl font-bold ml-2">
                Authentication
            </h1>
        </div>
    </div>
    <div>{{ $slot }}</div>
    <div class="w-full hidden md:flex">
        </div>
</header>
