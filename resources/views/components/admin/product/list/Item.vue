<template>
  <components-list-item
    :image="this.item.main_image"
    :title="this.item.name"
    :subtitle="this.item.description"
    :timestamp="this.item.created_at"
  >
    <components-badge-info class="ml-2" v-if="this.item.price"
      >${{ this.item.price.value / 100 }}</components-badge-info
    >
    <components-link-icon
      class="ml-2"
      icon="fa-pen"
      :href="this.item.routes.edit"
    ></components-link-icon>
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
