<template>
  <div v-on:click="open">
    <slot />
  </div>
  <div v-if="this.isOpen" class="fixed inset-0 flex flex-col items-center justify-center z-50">
    <div v-on:click="close" class="bg-black opacity-40 absolute inset-0 -z-10"></div>
    <div class="px-6 py-3 bg-base-100 w-full max-w-xs">
      <h1 class="font-bold">{{ this.title }}</h1>
      <p class="text-sm">{{ this.description }}</p>
      <div class="flex flex-row items-center justify-between mt-2">
        <bs-button-solid @onclick="action">
          Delete
        </bs-button-solid>
        <bs-button-solid @onclick="close">
          Back
        </bs-button-solid>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },
  methods: {
    action: function () {
      window.open(this.href, "_self");
    },
    open: function () {
      this.isOpen = true;
    },
    close: function () {
      this.isOpen = false;
    },
  },
  props: ["href", "title", "description"],
};
</script>
