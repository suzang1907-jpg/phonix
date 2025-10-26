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
      <template v-for="domain in this.items.domains.data">
        <components-admin-domain-list-item
          class="mb-2"
          :item="domain"
        ></components-admin-domain-list-item>
      </template>
      <template v-for="article in this.items.articles.data">
        <components-admin-article-list-item
          class="mb-2"
          :item="article"
        ></components-admin-article-list-item>
      </template>
      <template v-for="blog in this.items.blogs.data">
        <components-admin-blog-list-item
          class="mb-2"
          :item="blog"
        ></components-admin-blog-list-item>
      </template>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

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
        "/api/search/admin/dashboard",
        {
          search: searchValue,
        },
        this,
        {
          hideLoadingOverlay: false,
          showLoadingOverlay: false,
        }
      );

      this.items = result.getData("items");
    },
  },
};
</script>
