@props(['page'])
@php
$page = $page ?? App\Services\AdminPage::current();
@endphp
<footer class="mt-12">
    <div class="bg-background text-invert p-2">
        <p class="text-center text-sm">
            © 2024 <a href="{{ route('web.home.show') }}" aria-label="{{ $page->domain()->domain }}" class="footer-link">{{ $page->domain()->domain }}</a>
            <br>{{ __('policy.all_rights_reserved') }}
        </p>
    </div>
</footer>