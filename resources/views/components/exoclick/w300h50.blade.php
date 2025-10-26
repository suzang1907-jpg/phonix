@props(['page'])
@unless(empty($page->domain()->getMetaData('exoclick')))
@unless(empty($page->domain()->getMetaData('exoclick')['w300h50']))
<div class="w-full mx-auto flex flex-col items-center justify-center">
    <div>
        {!! $page->domain()->getMetaData('exoclick')['w300h50'] !!}
    </div>
</div>
@endunless
@endunless