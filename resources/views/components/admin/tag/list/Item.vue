<template>
  <components-list-item
    :title="this.item.tag"
    :timestamp="this.item.created_at"
  >
    <components-badge-info
      icon="fa-filter"
      v-if="this.item.conditions && this.item.conditions.length > 0"
      >{{ this.item.conditions.length + " conditions" }}</components-badge-info
    >
    <components-modal-delete
      :href="this.item.route_tag_destroy"
      title="Delete tag?"
      description="This action can not be undone."
    >
      <components-button-icon
        icon="fa-trash"
        class="ml-2"
        type="error"
      ></components-button-icon>
    </components-modal-delete>
    <components-link-icon
      :href="this.item.route_tag_edit"
      icon="fa-pen"
      class="ml-2"
    ></components-link-icon>
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
