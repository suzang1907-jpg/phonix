@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['popunder'] ?? null))
<script type='text/javascript' src="{{ $page->domain()->getMetaData('adsterra')['popunder'] }}"></script>
@endunless
@endunless