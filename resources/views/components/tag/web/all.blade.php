@props(['page'])
@unless(empty($page->getData('tags_data')))
@foreach($page->getData('tags_data') as $tag)
@unless($tag['data']->count() == 0)
<x-tag.web.list :tag="$tag" />
@endunless
@endforeach
@else
<div></div>
@endunless