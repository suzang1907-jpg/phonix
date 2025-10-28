@props(['title' => null, 'domain' => null, 'article' => null, 'city' => null, 'country' => null, 'district' => null])
<header class="flex flex-row justify-between w-full items-center p-6 border-b border-b-base-300">
    <div class="flex flex-col shrink min-w-32">
        <div class="flex flex-row items-center">
            <img loading="lazy" decoding="async" alt="{{ App\Services\Page::current()->header() }}" width="48px" height="48px" class="w-12 h-12 object-cover rounded-md" src="{{ route('file.project.logo', ['size' => '48']) }}" />
            <h1 class="text-start text-xl font-bold ml-2">
                {{ App\Services\Page::current()->header() }}
            </h1>
        </div>
        @unless(empty(App\Services\Page::current()->subtitle()))
        <div class="w-full">
            <p class="text-start flex"> {{ App\Services\Page::current()->subtitle() }}</p>
        </div>
        @endunless
    </div>
    <div>{{ $slot }}</div>
    <div class="w-full hidden md:flex">
        <div class="text-invert w-full flex flex-row justify-end items-center">
            <form class="flex flex-row w-full items-center justify-center border border-border max-w-md rounded-xl bg-input" method="GET" action="{{ route('web.search.show') }}">
                <input title="Search" placeholder="{{ __('base.search_placeholder') }}" name="search" id="search" class="flex-grow outline-none rounded-l-xl p-4 bg-input" />
                <button class="outline-none p-4 rounded-r-xl">{{ __('base.search') }}</button>
            </form>
        </div>
    </div>
</header>