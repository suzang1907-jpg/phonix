<template>
  <bs-button-outline type="error" class="btn-sm" :href="this.href">
    <font-awesome-icon :class="this.styles[this.type ?? 'ghost'].text"
      :size="this.size == 'md' ? null : this.size ?? 'xs'" :icon="'fa-solid ' + this.icon" />
  </bs-button-outline>
</template>
<script>
export default {
  data() {
    return {
      styles: {
        ghost: {
          background: "",
          text: "text-gray-600",
        },
        info: {
          background: "bg-gray-200",
          text: "text-gray-900",
        },
        error: {
          background: "bg-red-200",
          text: "text-red-900",
        },
      },
    };
  },
  props: ["href", "icon", "type", "size"],
};
</script>
