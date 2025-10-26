@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['native'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['native']['id'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['native']['url'] ?? null))
<div class="w-full mx-auto flex flex-col items-center justify-center">
    <div>
        <script async="async" data-cfasync="false" src="{{ $page->domain()->getMetaData('adsterra')['native']['url'] }}"></script>
        <div id="container-{{ $page->domain()->getMetaData('adsterra')['native']['id'] }}"></div>
    </div>
</div>
@endunless
@endunless
@endunless
@endunless