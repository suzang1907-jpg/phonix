@props(['amp' => false, 'domain' => ''])

@if ($amp)
    <a class="link-support-listener relative" target="_blank" href="{{ App\Routing\Amp::route('amp.share.support') }}">
        <div class="relative w-full py-2 flex-shrink-0 mx-auto max-w-md flex flex-col items-center">
            <p class="text-center article-text-shadow">İlan & Şikayet Hattı</p>
        </div>
        <div class="inset-0 absolute support-banner-style -z-10"></div>
    </a>
@else
    <div></div>
@endif
