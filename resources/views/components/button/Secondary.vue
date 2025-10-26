<template>
  <button v-on:click="this.click" :type="this.type ?? 'button'" :class="this.sizes[this.size ?? 'sm']">
    <font-awesome-icon
      v-if="this.icon"
      class="text-white mr-1"
      :size="this.size == 'md' ? null : this.size ?? 'sm'"
      :icon="'fa-solid ' + this.icon"
    />
    <slot />
  </button>
</template>
<script>
export default {
  data() {
    return {
      sizes: {
        xs: "flex flex-row items-center font-normal px-2 py-0.5 text-center text-xs bg-white text-black border border-gray-200 rounded-md select-none cursor-pointer hover:opacity-80 justify-center",
        sm: "flex flex-row items-center font-normal px-2 py-0.5 text-center text-sm bg-white text-black border border-gray-200 rounded-md select-none cursor-pointer hover:opacity-80 justify-center",
        md: "flex flex-row items-center font-normal px-2 py-0.5 text-center text-md bg-white text-black border border-gray-200 rounded-md select-none cursor-pointer hover:opacity-80 justify-center",
      },
    };
  },
  props: ["type", "icon", "size", "click"],
};
</script>
