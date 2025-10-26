@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['w300h250'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w300h250']['id'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w300h250']['url'] ?? null))
<div class="w-full mx-auto flex flex-col items-center justify-center">
    <div>
        <script type="text/javascript">
            atOptions = {
                'key': "{{ $page->domain()->getMetaData('adsterra')['w300h250']['id'] }}",
                'format': 'iframe',
                'height': 250,
                'width': 300,
                'params': {}
            };
        </script>
        <script type="text/javascript" src="{{ $page->domain()->getMetaData('adsterra')['w300h250']['url'] }}"></script>
    </div>
</div>
@endunless
@endunless
@endunless
@endunless