<template>
  <components-list-item
    :title="this.item.name"
    :subtitle="this.item.content"
    :timestamp="this.item.created_at"
  >

  </components-list-item>
</template>
<script>
export default {
  props: ["item"],
};
</script>
