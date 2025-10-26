<template>
  <components-list-item
    :title="this.item.origin"
    :timestamp="this.item.created_at"
  >
    <bs-link-solid
      v-if="this.item.cloudflare_integration_id"
      size="xs"
      :href="this.$root.route('admin.site.dns.list', { id: this.item.id })"
    >
      DNS
    </bs-link-solid>
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
