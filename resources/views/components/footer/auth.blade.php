@props(['page'])
@php
$page = $page ?? App\Services\WebPage::current();
@endphp
<footer class="mt-12 bg-black text-white p-2">
    <nav class="flex flex-wrap gap-12 items-start justify-center">
        <div class="flex flex-col gap-2">
            <strong>{{ __('base.about_us') }}</strong>
            <a rel="home" href="{{ App\Routing\Web::route('web.home.show') }}">{{ __('base.homepage') }}</a>
            <a rel="nofollow" href="{{ App\Routing\Web::route('web.policy.dmca') }}">DMCA</a>
            <a rel="nofollow" href="{{ App\Routing\Web::route('web.policy.cookies') }}">{{ __('base.cookies') }}</a>
        </div>
        <div class="flex flex-col gap-2">
            <strong>{{ __('base.posts') }}</strong>
            <a href="{{ App\Routing\Web::route('web.blog.list') }}">{{ __('base.posts') }}</a>
            <a rel="nofollow" href="{{ App\Routing\Web::route('web.blog.random.show') }}">{{ __('base.random_post') }}</a>
        </div>
        <div class="flex flex-col gap-2">
            <strong>{{ __('base.stories') }}</strong>
            <a href="{{ App\Routing\Web::route('web.story.list') }}">{{ __('base.stories') }}</a>
        </div>
    </nav>

    
    <p class="text-sm text-center mt-12">
        {{ __('policy.disclaimer') }}
    </p>
    <p class="text-sm text-center mt-2">
        {{ __('policy.cookies') }}
    </p>
    <p class="text-center text-sm mt-2">
        © 2025 <a href="{{ route('web.home.show') }}" aria-label="{{ $page->domain()->domain }}"
            class="footer-link">{{ $page->domain()->domain }}</a>
        <br>{{ __('policy.all_rights_reserved') }}
    </p>
    @php
    $dmca_script = $page->workspace()?->dmca_script;
    @endphp
    @unless(empty($dmca_script))
    {!! $dmca_script !!}
    @endunless
</footer>
