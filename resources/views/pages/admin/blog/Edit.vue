<template>
  <div class="flex flex-col h-full flex-grow">
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-input-text
        :xvalue="this.blog.title"
        ref="title"
        title="Title"
        id="title"
        :required="true"
      >
      </bs-input-text>
      <bs-input-text
        :xvalue="this.blog.description"
        ref="description"
        title="Description"
        id="description"
        :required="true"
      >
      </bs-input-text>
      <components-admin-location-select
        :xlocation="this.blog.location"
        ref="location"
      ></components-admin-location-select>

      <bs-input-image
        ref="image"
        title="Image"
        :placeholder="
          this.$root.route('file.image.show', { id: this.blog.image_id })
        "
        :required="true"
        id="image"
      >
      </bs-input-image>

      <bs-input-text ref="tags" title="Tags" id="tags"> </bs-input-text>
    </div>
    <components-admin-blog-content-editor
      :xvalue="this.blog.content_raw"
      ref="content"
    ></components-admin-blog-content-editor>
    <div
      class="grid grid-cols-1 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-button-solid @onclick="this.submit"> Save </bs-button-solid>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      await ApiRequest.post(
        this.$root.route("admin.blog.update", { id: this.blog.id }),
        {
          image: this.$refs.image.value,
          title: this.$refs.title.value,
          description: this.$refs.description.value,
          content: this.$refs.content.value,
          content_raw: this.$refs.content.raw,
          location_id: this.$refs.location.location?.id,
        },
        this
      );
    },
  },
  props: ["blog"],
};
</script>
