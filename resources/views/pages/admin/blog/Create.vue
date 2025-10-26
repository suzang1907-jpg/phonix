<template>
  <div class="flex flex-col h-full flex-grow">
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-input-text
        ref="title"
        title="Title"
        id="title"
        :required="true"
      ></bs-input-text>
      <bs-input-text
        ref="description"
        title="Description"
        id="description"
        :required="true"
      ></bs-input-text>
      <bs-input-image
        ref="image"
        title="Image"
        :required="false"
        id="image"
      ></bs-input-image>
      <bs-input-text ref="tags" title="Tags" id="tags"></bs-input-text>

      <div>
        <bs-button-solid id="blogcreate" @onclick="this.submit">Create</bs-button-solid>
      </div>
    </div>
    <components-admin-blog-content-editor
      ref="content"
    ></components-admin-blog-content-editor>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      await ApiRequest.post(
        "/admin/blog/store",
        {
          image: this.$refs.image.value,
          title: this.$refs.title.value,
          description: this.$refs.description.value,
          content: this.$refs.content.value,
          content_raw: this.$refs.content.raw,
        },
        this
      );
    },
  },
  props: [],
};
</script>
