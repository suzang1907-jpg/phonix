<template>
  <bs-side-bar :open="this.open" class="border-r border-r-base-300 bg-base-100 no-scroll-bar overflow-y-scroll" x-cloak>
    <div class="flex flex-row items-center justify-between">
      <div class="font-bold text-base">Admin</div>
      <button class="lg:hidden shrink-0 rounded-md bg-base-100 w-8 h-8 flex items-center justify-center" type="button"
        v-on:click="this.sidebarToggle()">
        <font-awesome-icon class="text-invert" icon="fa-solid fa-xmark" />
      </button>
    </div>
    <components-admin-sidebar-route :href="this.search" :selected="this.current == this.search" icon="fa-search"
      class="mt-12">
      {{ $t("search") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.dashboard" :selected="this.current == this.dashboard" icon="fa-house"
      class="mt-2">
      {{ $t("dashboard") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.customers" :selected="this.current == this.customers" icon="fa-users"
      class="mt-2">
      {{ $t("customers") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.articles" :selected="this.current == this.articles" icon="fa-bolt"
      class="mt-2">
      {{ $t("articles") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.blogs" :selected="this.current == this.blogs" icon="fa-newspaper"
      class="mt-2">
      {{ $t("blogs") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.stories" :selected="this.current == this.stories" icon="fa-newspaper"
      class="mt-2">
      {{ $t("stories") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.keywords" :selected="this.current == this.keywords" icon="fa-font"
      class="mt-2">
      {{ $t("keywords") }}
    </components-admin-sidebar-route>

    <components-admin-sidebar-route :href="this.tags" :selected="this.current == this.tags" icon="fa-tag" class="mt-2">
      {{ $t("tags") }}
    </components-admin-sidebar-route>

    <components-admin-sidebar-route :href="this.domains" :selected="this.current == this.domains" icon="fa-globe"
      class="mt-2">
      {{ $t("domains") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.sitemaps" :selected="this.current == this.sitemaps" icon="fa-sitemap"
      class="mt-2">
      {{ $t("sitemaps") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.locations" :selected="this.current == this.locations"
      icon="fa-location-pin" class="mt-2">
      {{ $t("locations") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route :href="this.workspace" :selected="this.current == this.workspace" icon="fa-square"
      class="mt-2">
      {{ $t("workspace") }}
    </components-admin-sidebar-route>

    <div class="flex grow"></div>

    <components-admin-sidebar-route :href="this.project" :selected="this.current == this.project" icon="fa-cog"
      class="mt-2">
      {{ $t("project") }}
    </components-admin-sidebar-route>
    <components-admin-sidebar-route href="https://analytics.google.com/analytics/web/#" class="mt-2" target="_blank">
      Analytics
    </components-admin-sidebar-route>
  </bs-side-bar>
</template>
<script>
export default {
  methods: {
    sidebarToggle() {
      this.$emit("ontoggle");
    },
  },
  props: [
    "dashboard",
    "articles",
    "blogs",
    "stories",
    "keywords",
    "current",
    "domains",
    "project",
    "tags",
    "sitemaps",
    "locations",
    "open",
    "search",
    "workspace",
    "customers"
  ],
};
</script>
