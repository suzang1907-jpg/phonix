<template>
  <button
    class="flex-shrink-0 rounded-md bg-base-100 w-8 h-8 flex items-center justify-center"
    type="button"
    v-on:click="this.sidebarOpen()"
  >
    <font-awesome-icon class="text-invert" icon="fa-solid fa-bars" />
  </button>
</template>
<script>
export default {
  methods: {
    sidebarOpen() {
      if (!this.sidebar) {
        this.sidebar = document.getElementById("sidebar");
      }

      this.sidebar.classList.add("sidebar-opened");
    },
  },
  data() {
    return {
      sidebar: document.getElementById("sidebar"),
    };
  },

  props: [],
};
</script>
