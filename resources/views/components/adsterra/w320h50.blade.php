@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['w320h50'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w320h50']['id'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w320h50']['url'] ?? null))
<div class="w-full mx-auto flex flex-col items-center justify-center">
    <div>
        <script type="text/javascript">
            atOptions = {
                'key': "{{ $page->domain()->getMetaData('adsterra')['w320h50']['id'] }}",
                'format': 'iframe',
                'height': 50,
                'width': 320,
                'params': {}
            };
        </script>
        <script type="text/javascript" src="{{ $page->domain()->getMetaData('adsterra')['w320h50']['url'] }}"></script>
    </div>
</div>
@endunless
@endunless
@endunless
@endunless