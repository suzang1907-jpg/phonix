@props(['domain'])
@unless (empty($domain->referal_domains))
<section id="referals" class="mt-12">
    <h3 class="text-xl max-w-96">{{ __('base.referal_title') }}</h3>
    <nav>
        <ul class="flex flex-col mt-2">
            @foreach ($domain->referal_domains as $referal_domain)
            <li class="mt-2 text-sm">
                <a href="https://{{ $referal_domain['domain'] }}" aria-label="{{ $referal_domain['domain'] }}">{{ $referal_domain['domain'] }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</section>
@else
<div></div>
@endunless