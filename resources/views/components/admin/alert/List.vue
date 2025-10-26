<template>
  <div class="flex flex-col top-2 right-0 fixed z-40">
    <template v-for="(value, key) in this.$root.alerts">
      <components-admin-alert-list-item
        class="mb-2"
        :title="value.title"
        :text="value.text"
        :type="value.type"
        :index="key"
      ></components-admin-alert-list-item>
    </template>
  </div>
</template>
<script>
export default {};
</script>
