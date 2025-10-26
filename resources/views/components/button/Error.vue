<template>
  <components-button
    :type="this.type ?? 'submit'"
    class="font-normal px-3 py-1 text-sm text-center bg-red-200 text-red-900 rounded-md select-none cursor-pointer hover:opacity-80"
  >
    <slot />
  </components-button>
</template>
<script>
export default {
  props: ["type"],
};
</script>
