<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <div class="flex flex-row items-center">
      <components-input-text class="mr-2" placeholder="Search..." ref="search"></components-input-text>

      <button class="btn" v-on:click="onSearch">Search</button>
    </div>
    <div v-if="this.items" class="mt-6 p-2 bg-base-100">
      <template v-for="domain in this.items.domains.data">
        <div>{{ domain.id }}</div>
      </template>
      <template v-for="article in this.items.articles.data">
        <div>{{ article.id }}</div>
      </template>
      <template v-for="blog in this.items.blogs.data">
        <div>{{ blog.id }}</div>
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
