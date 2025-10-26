<template>
  <div class="flex flex-col h-full flex-grow">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full">
      <bs-input-text ref="title" title="Title" id="title" :required="true"></bs-input-text>
      <bs-input-text ref="description" title="Description" id="description" :required="true"></bs-input-text>
      <bs-input-image ref="image" title="Image" id="image"></bs-input-image>
      <bs-input-text ref="tags" title="Tags" id="tags"></bs-input-text>

      <div>
        <bs-button-solid @onclick="this.submit">Create</bs-button-solid>
      </div>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      var image = this.$refs.image.value;

      await ApiRequest.post(
        "/admin/story/store",
        {
          image: image,
          title: this.$refs.title.value,
          description: this.$refs.description.value,
        },
        this
      );
    },
  },
  props: [],
};
</script>
