<template>
  <div>

    <components-list-item :title="this.item.domain" :subtitle="this.item.name" :timestamp="this.item.created_at">
      <div class="flex flex-row gap-2 items-center justify-center">
        <components-link-icon :href="this.$root.route('admin.domain.edit', { id: this.item.id })" icon="fa-pen"
          class="ml-2"></components-link-icon>
      </div>
    </components-list-item>
    <div class="flex flex-wrap gap-2 border-b border-b-border py-2 mb-4">
      <components-badge-info class="ml-2">{{
        this.item.type
        }}</components-badge-info>
      <components-badge-info icon="fa-location-pin" v-if="!this.item.location">Global</components-badge-info>
      <components-badge-info class="ml-2" icon="fa-location-pin" v-if="this.item.location">{{
        this.item.location.localized_name }}</components-badge-info>
      <components-badge-info icon="fa-cloud"
        v-if="this.item.cloudflare_zone_identifier">Cloudflare</components-badge-info>
      <components-badge-info class="ml-2" v-if="!this.item.has_cloudflare_integration">CI
        Disabled</components-badge-info>
      <components-badge-info class="ml-2" v-if="
        this.item.has_cloudflare_integration &&
        !this.item.dns_record_confirmed_at
      ">CI Not Synced</components-badge-info>
      <components-badge-info class="ml-2" v-if="
        this.item.has_cloudflare_integration &&
        this.item.dns_record_confirmed_at
      ">CI Synced</components-badge-info>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item"],
};
</script>
