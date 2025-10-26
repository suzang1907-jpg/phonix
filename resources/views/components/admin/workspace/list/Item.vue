<template>
  <div>
    <components-list-item
      :title="this.item.name"
      :subtitle="this.item.id"
      :timestamp="this.item.created_at"
    >
    </components-list-item>
    <div class="flex flex-wrap gap-2">
      <template v-for="(project) in item.projects">
        <div class="flex flex-col border border-border p-4 rounded-lg">
          <p class="text-sm">Web Name: {{ project.name ?? '-' }}</p>
          <p class="text-sm">Amp Name: {{ project.amp_name ?? '-' }}</p>
          <p class="text-xs">Location description: {{ project.location_description ?? '-' }}</p>
          <div class="mt-2 flex flex-col" v-if="project.logo_id">
            <p class="text-xs">Logo</p>
            <img class="mt-1 max-w-24" :src="this.$root.route('file.image.show', {'id' : project.logo_id})"/>
          </div>
          <div class="mt-2 flex flex-col" v-if="project.amp_logo_id">
            <p class="text-xs">Amp Logo</p>
            <img class="mt-1 max-w-24" :src="this.$root.route('file.image.show', {'id' : project.amp_logo_id})"/>
          </div>
          <p class="text-xs mt-2">Support Phone: {{ project.support_phone_number ?? '-' }}</p>
          <div class="mt-2 flex flex-col" v-if="project.support_banner_id">
            <p class="text-xs">Support Banner</p>
            <img class="mt-1 max-w-24" :src="this.$root.route('file.image.show', {'id' : project.support_banner_id})"/>
          </div>
          <div class="mt-2 flex flex-col" v-if="project.article_banner_id">
            <p class="text-xs">Article Banner</p>
            <img class="mt-1 max-w-24" :src="this.$root.route('file.image.show', {'id' : project.article_banner_id})"/>
          </div>
          <div class="mt-2 flex flex-col" v-if="project.article_watermark_id">
            <p class="text-xs">Amp Watermark</p>
            <img class="mt-1 max-w-24" :src="this.$root.route('file.image.show', {'id' : project.article_watermark_id})"/>
          </div>
        </div>
      </template>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item"],
};
</script>
