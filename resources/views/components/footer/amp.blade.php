@props(['page'])
@php
    $page = $page ?? App\Services\AmpPage::current();
@endphp
<footer>
    <nav>
        <a class="link-home-listener" rel="home"
            href="{{ App\Routing\Amp::route('amp.home.show') }}">{{ __('base.homepage') }}</a>
        <a class="link-posts-listener" href="{{ App\Routing\Amp::route('amp.blog.list') }}">{{ __('base.posts') }}</a>
        <a class="link-stories-listener"
            href="{{ App\Routing\Amp::route('amp.story.list') }}">{{ __('base.stories') }}</a>
    </nav>
    <p class="font-bold">
        {{ $page->domain()->getName() }}
    </p>
    <p>
        {{ __('policy.disclaimer') }}
    </p>
    <p>
        {{ __('policy.cookies') }}
    </p>
    <p>
        © 2025 <a href="{{ App\Routing\Amp::route('amp.home.show') }}" aria-label="{{ $page->domain()->domain }}"
            class="link-home-listener">{{ $page->domain()->domain }}</a>
        <br>{{ __('policy.all_rights_reserved') }}
    </p>
</footer>
