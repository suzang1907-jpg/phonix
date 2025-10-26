<template>
  <div
    v-bind:class="{
      'text-sm transform transition-all ease-in-out duration-200 translate-x-full pr-2':
        !this.show,
      'text-sm transform transition-all ease-in-out duration-200 translate-x-0 pr-2':
        this.show,
    }"
    role="alert"
  >
    <div :class="this.classes[this.type]">
      <p class="font-bold select-none">{{ this.title }}</p>
      <p class="select-none">{{ this.text }}</p>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      show: false,
      classes: {
        error:
          "border-l-4 py-2 px-4 bg-red-200 border-red-500 text-red-900 flex flex-col rounded-md",
        success:
          "border-l-4 py-2 px-4 bg-green-200 border-green-500 text-green-900 flex flex-col rounded-md",
      },
    };
  },
  methods: {
    showAlert: function () {
      this.show = true;
    },
    hideAlert: function () {
      this.show = false;
    },
  },
  mounted() {
    const root = this.$root;

    try {
      setTimeout(this.showAlert, 100);
      setTimeout(this.hideAlert, 1500);
      setTimeout(function () {
        try {
          root.removeAlert(this.index);
        } catch (e) {
          console.log(e);
        }
      }, 2000);
    } catch (e) {
      console.log(e);
    }
  },
  props: ["title", "text", "type", "index"],
};
</script>
