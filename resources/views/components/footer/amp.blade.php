@props(['page'])
@php
    $page = $page ?? App\Services\AmpPage::current();
@endphp
<footer class="mt-12">
    <div class="bg-base-100 p-2">
        <div class="flex flex-wrap gap-4 items-center justify-center">
            <a class="link-home-listener" rel="home" href="{{ App\Routing\Amp::route('amp.home.show') }}">{{ __('base.homepage') }}</a>
            <a class="link-posts-listener" href="{{ App\Routing\Amp::route('amp.blog.list') }}">{{ __('base.posts') }}</a>
            <a class="link-stories-listener" href="{{ App\Routing\Amp::route('amp.story.list') }}">{{ __('base.stories') }}</a>
        </div>
        <p class="text-sm text-center font-bold mt-2">
            {{ $page->domain()->getName() }}
        </p>
        <p class="text-sm text-center mt-2">
            {{ __('policy.disclaimer') }}
        </p>
        <p class="text-sm text-center mt-2">
            {{ __('policy.cookies') }}
        </p>
        <p class="text-center text-sm mt-2">
            © 2025 <a href="{{ App\Routing\Amp::route('amp.home.show') }}" aria-label="{{ $page->domain()->domain }}"
                class="footer-link link-home-listener">{{ $page->domain()->domain }}</a>
            <br>{{ __('policy.all_rights_reserved') }}
        </p>
    </div>
</footer>
