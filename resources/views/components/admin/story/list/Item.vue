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
      :href="this.$root.route('admin.story.destroy', { id: this.item.id })"
      title="Delete story?"
      description="This action can not be undone."
    >
      <components-button-icon icon="fa-trash" class="ml-2" type="error"
        >Delete</components-button-icon
      >
    </components-modal-delete>
  </components-list-item>
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
