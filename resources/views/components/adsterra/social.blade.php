@props(['page'])
@unless(empty($page->domain()->getMetaData('adsterra')))
@unless(empty($page->domain()->getMetaData('adsterra')['social'] ?? null))
<script type='text/javascript' src="{{ $page->domain()->getMetaData('adsterra')['social'] }}"></script>
@endunless
@endunless