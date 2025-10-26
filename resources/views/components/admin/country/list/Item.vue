<template>
  <components-list-item
    :title="this.item.country"
    :timestamp="this.item.created_at"
  >
    <components-badge-info icon="fa-newspaper">{{
      this.item.blog_count + " Blogs"
    }}</components-badge-info>
    <components-badge-info class="ml-2" icon="fa-newspaper">{{
      this.item.story_count + " Stories"
    }}</components-badge-info>
    <components-badge-info class="ml-2" icon="fa-globe">{{
      this.item.domain_count + " Domains"
    }}</components-badge-info>
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
