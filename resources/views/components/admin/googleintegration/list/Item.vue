<template>
  <components-list-item
    :title="this.item.client_id"
    :timestamp="this.item.created_at"
  >
    <components-modal-delete
      :href="
        this.$root.route('admin.googleintegration.delete', { id: this.item.id })
      "
      title="Delete Google Integration?"
      description="This action can not be undone."
    >
      <components-button-icon
        icon="fa-trash"
        class="ml-2"
        type="error"
      ></components-button-icon>
    </components-modal-delete>
  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
