<template>
  <div class="flex flex-col">
    <div class="flex flex-row items-end">
      <h2 class="text-base font-bold">{{ this.title }}</h2>
      <p class="text-sm text-invert ml-1">({{ this.collection.total }})</p>
    </div>
    <div class="mt-2 flex flex-col">
      <template v-for="(value, index) in this.collection.data">
        <component
          :is="this.item"
          :item="value"
          :class="
            index != Object.keys(this.collection.data).length - 1 ? 'mb-2' : ''
          "
        ></component>
      </template>
    </div>
    <div
      class="flex flex-row items-center justify-between mt-2"
      v-if="
        this._paginate &&
        this.collection &&
        (this.collection.next_page_url || this.collection.current_page > 1)
      "
    >
      <components-link-secondary
        v-if="this.collection.current_page > 1"
        :href="this.collection.prev_page_url"
      >
        Back
      </components-link-secondary>
      <div v-if="this.collection.current_page <= 1"></div>
      <components-link-secondary
        v-if="this.collection.next_page_url"
        :href="this.collection.next_page_url"
      >
        Next
      </components-link-secondary>
      <div v-if="!this.collection.next_page_url"></div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      _paginate: this.$props.paginate ?? true,
    };
  },
  props: ["title", "collection", "item", "paginate"],
};
</script>
