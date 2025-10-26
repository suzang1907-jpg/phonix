<template>
  <components-list-item
    :title="this.item.keyword"
    :timestamp="this.item.created_at"
  >
    <components-modal-delete
      :href="this.item.route_keyword_destroy"
      title="Delete keyword?"
      description="This action can not be undone."
    >
      <components-button-icon
        icon="fa-trash"
        type="error"
      ></components-button-icon>
    </components-modal-delete>
    <components-link-icon
      :href="this.item.route_keyword_edit"
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
