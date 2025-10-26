<template>
  <bs-link-outline class="btn-sm" :href="this.href">
    <font-awesome-icon :class="this.styles[this.type ?? 'ghost'].text"
      :size="this.size == 'md' ? null : this.size ?? 'xs'" :icon="'fa-solid ' + this.icon" />
  </bs-link-outline>
</template>
<script>
export default {
  data() {
    return {
      styles: {
        ghost: {
          background: "",
          text: "text-invert",
        },
        info: {
          background: "bg-background",
          text: "text-invert",
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
