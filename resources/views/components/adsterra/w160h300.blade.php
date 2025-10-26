@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['w160h300'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w160h300']['id'] ?? null))
@unless(empty($page->domain()->getMetaData('adsterra')['w160h300']['url'] ?? null))
<div class="w-full mx-auto flex flex-col items-center justify-center">
    <div>
        <script type="text/javascript">
            atOptions = {
                'key': "{{ $page->domain()->getMetaData('adsterra')['w160h300']['id'] }}",
                'format': 'iframe',
                'height': 300,
                'width': 160,
                'params': {}
            };
        </script>
        <script type="text/javascript" src="{{ $page->domain()->getMetaData('adsterra')['w160h300']['url'] }}"></script>
    </div>
</div>
@endunless
@endunless
@endunless
@endunless