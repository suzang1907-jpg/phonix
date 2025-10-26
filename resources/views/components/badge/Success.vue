<template>
  <bs-badge-outline type="success" class="badge-sm">
    <div class="flex flex-row items-center whitespace-nowrap">
      <font-awesome-icon
        v-if="this.icon"
        size="xs"
        class="mr-1"
        :icon="'fa-solid ' + this.icon"
      />
      <slot />
    </div>
  </bs-badge-outline>
</template>
<script>
export default {
  props: ["icon"],
};
</script>
