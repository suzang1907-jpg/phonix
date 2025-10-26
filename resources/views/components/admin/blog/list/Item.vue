<template>
  <components-list-item
    :image="this.item.main_image"
    :title="this.item.title"
    :subtitle="this.item.description"
    :timestamp="this.item.created_at"
  >
    <components-badge-info icon="fa-location-pin" v-if="!this.item.location"
      >Global</components-badge-info
    >
    <components-badge-info
      class="ml-2"
      icon="fa-location-pin"
      v-if="this.item.location"
      >{{ this.item.location.localized_name }}</components-badge-info
    >

    <components-modal-delete
      :href="this.item.route_blog_destroy"
      title="Delete blog?"
      description="This action can not be undone."
    >
      <components-button-icon
        icon="fa-trash"
        class="ml-2"
        type="error"
      ></components-button-icon>
    </components-modal-delete>
    <components-link-icon
      :href="this.$root.route('admin.blog.edit', { id: this.item.id })"
      icon="fa-pen"
      class="ml-2"
    ></components-link-icon
  ></components-list-item>
</template>
<script>
export default {
  data() {
    return {
      title:
        this.item.title.slice(0, 30) +
        (50 < this.item.title.length ? "..." : ""),
      description:
        this.item.description.slice(0, 100) +
        (50 < this.item.description.length ? "..." : ""),
    };
  },
  props: ["item"],
};
</script>
