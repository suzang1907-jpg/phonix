<template>
  <components-list-item
    :title="this.item.sitemap.domain_id"
    :subtitle="this.item.sitemap.google_site_id"
    :timestamp="this.item.sitemap.created_at"
  >
    <components-badge-success
      icon="fa-check"
      v-if="this.item.sitemap.google_site_id"
      >Google</components-badge-success
    >
    <components-badge-error
      icon="fa-xmark"
      v-if="!this.item.sitemap.google_site_id"
      >Unknown</components-badge-error
    >
    <components-badge-info icon="fa-rotate" class="ml-2"
      ><components-timestamp
        :timestamp="this.item.sitemap.google_sitemap_submitted_at"
      ></components-timestamp
    ></components-badge-info>
    <components-link-secondary
      size="xs"
      :href="
        this.$root.route('admin.sitemap.submit', { id: this.item.sitemap.id })
      "
      icon="fa-rotate"
      class="ml-2"
      >Sync</components-link-secondary
    >
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
