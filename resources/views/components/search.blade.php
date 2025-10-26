@props(['domain' => null])
<div class="text-invert w-full bg-background flex flex-row justify-center items-center px-2 mt-2 md:hidden">
    <form class="flex flex-row w-full items-center justify-center border border-border max-w-md rounded-xl bg-input" method="GET" action="{{ route('web.search.show') }}">
        <input title="Search" placeholder="{{ __('base.search_placeholder') }}" name="search" class="flex-grow outline-none rounded-l-xl p-4 bg-input" />
        <button class="outline-none p-4 rounded-r-xl">{{ __('base.search') }}</button>
    </form>
</div>