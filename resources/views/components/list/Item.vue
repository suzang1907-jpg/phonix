<template>
  <div class="flex flex-row w-full items-center">
    <img
      v-if="this.image"
      class="w-12 h-12 object-cover flex-shrink-0 rounded-md mr-2"
      :src="this.image"
    />
    <div
      class="border-b border-b-border w-full p-1 flex flex-row items-center"
    >
      <div class="flex flex-col w-full mr-2">
        <p class="text-xs line-clamp-1" v-if="this.title">{{ this.title }}</p>
        <p class="text-xs line-clamp-1" v-if="this.subtitle">
          {{ this.subtitle }}
        </p>
        <components-timestamp
          v-if="this.timestamp"
          :timestamp="this.timestamp"
        ></components-timestamp>
      </div>
      <slot />
    </div>
  </div>
</template>
<script>
export default {
  props: ["image", "title", "subtitle", "timestamp"],
};
</script>
