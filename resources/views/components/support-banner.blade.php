@props(['amp' => false, 'domain' => ''])

@if(empty($domain->site->project->supportBanner))
<div></div>
@else
@if($amp)
<a class="link-support-listener" target="_blank" href="{{ App\Routing\Amp::route('amp.share.support') }}">
    <div class="relative w-full h-20 flex flex-shrink-0 mx-auto max-w-md">
        <amp-img class="cover" layout="fill" alt="Support" src="{{ route('file.project.reference.banner', ['reference' => $domain->getCanonicalDomain()]) }}"></amp-img>
    </div>
</a>
@else
<a class="h-24 link-support-listener" target="_blank" href="{{ App\Routing\Amp::route('amp.share.support') }}">
    <div class="relative w-full h-20 flex flex-shrink-0 mx-auto max-w-md">
        <img loading="lazy" decoding="async" alt="Support" class="relative w-full h-full" src="{{ route('file.project.banner') }}" />
    </div>
</a>
@endif
@endif