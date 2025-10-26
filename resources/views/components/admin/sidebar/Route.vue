<template>
  <a
    :class="
      'px-3 py-3 rounded-xl text-base lg:text-sm select-none ' +
      (this.selected ? 'bg-primary-600 text-primary-text' : 'bg-base-100 text-invert hover:bg-primary-500')
    "
    :href="this.href"
  >
    <font-awesome-icon :icon="'fa-solid ' + this.icon" class="mr-2"/>
    <slot />
  </a>
</template>
<script>
export default {
  props: ["href", "selected", "icon"],
};
</script>
