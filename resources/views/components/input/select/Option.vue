<template>
  <option :selected="this.selected" :value="this.value">
    <slot />
  </option>
</template>
<script>
export default {
  data() {
    return {
      value: this.$props.xvalue,
    };
  },
  props: ["selected", "xvalue"],
};
</script>
