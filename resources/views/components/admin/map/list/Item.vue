<template>
  <div>

    <components-list-item :title="this.item.name" :subtitle="this.item.slug" :timestamp="this.item.created_at">
      <div class="flex flex-row gap-2 items-center justify-center">
        <bs-link-solid class="btn-sm btn-error"
          :href="this.$root.route('admin.map.destroy', { id: this.item.id })">Delete</bs-link-solid>
        <bs-button-solid class="btn-sm" @onclick="copyUrl">Copy</bs-button-solid>
      </div>
    </components-list-item>
    <div class="flex flex-wrap gap-2 border-b border-b-border py-2 mb-4">
      <div class="text-xs">{{ this.item.url }}</div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item"],
  methods: {
    copyUrl: async function () {
      try {
        await navigator.clipboard.writeText(this.item.url);
        this.$root.addAlert({
          title: "Copied!",
          text: "Copied to clipboard.",
          type: "success",
        });
      } catch (e) {
        console.log(e);
      }
    }
  }
};
</script>
