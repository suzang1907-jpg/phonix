<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <div class="flex flex-row items-center">
      <bs-input-text
        collapsed
        class="mr-2"
        placeholder="Search..."
        ref="search"
      ></bs-input-text>

      <bs-button-solid @onclick="onSearch">Search</bs-button-solid>
    </div>
    <div v-if="this.items" class="mt-6 p-2 bg-base-100">
      <template v-for="map in this.items">
        <components-admin-map-list-item
          class="mb-2"
          :item="map"
        ></components-admin-map-list-item>
      </template>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../../js/utils/api/ApiRequest";

export default {
  data() {
    return {
      items: null,
    };
  },
  methods: {
    onSearch: async function () {
      var searchValue = this.$refs.search.value;

      if (!searchValue) {
        this.items = null;
        return;
      }

      searchValue = searchValue.trim();

      if (!searchValue) {
        this.items = null;
        return;
      }

      if (searchValue == "") {
        this.items = null;
        return;
      }

      const result = await ApiRequest.post(
        "/api/location/map/search",
        {
          search: searchValue,
        },
        this,
        {
          hideLoadingOverlay: false,
          showLoadingOverlay: false,
        }
      );

      if (!result) {
      return;
      }

      this.items = result.getData("maps");
    },
  },
};
</script>
