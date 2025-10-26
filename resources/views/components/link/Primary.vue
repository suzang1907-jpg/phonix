<template>
  <a :href="this.href" :class="this.sizes[this.size ?? 'sm']">
    <font-awesome-icon
      v-if="this.icon"
      class="text-white mr-1"
      :size="this.size == 'md' ? null : this.size ?? 'sm'"
      :icon="'fa-solid ' + this.icon"
    />
    <slot />
  </a>
</template>
<script>
export default {
  data() {
    return {
      sizes: {
        xs: "flex flex-row justify-center items-center font-normal px-2 py-0.5 text-center text-xs bg-purple-600 text-white rounded-md select-none cursor-pointer hover:opacity-80",
        sm: "flex flex-row justify-center items-center font-normal px-2 py-0.5 text-center text-sm bg-purple-600 text-white rounded-md select-none cursor-pointer hover:opacity-80",
      },
    };
  },
  props: ["href", "icon", "size"],
};
</script>
