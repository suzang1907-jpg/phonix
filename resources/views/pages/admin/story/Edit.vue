<template>
  <div class="flex flex-col h-full flex-grow">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full">
      <bs-input-text :xvalue="this.story.title" ref="title" title="Title" id="title" :required="true">
      </bs-input-text>
      <bs-input-text :xvalue="this.story.description" ref="description" title="Description" id="description"
        :required="true">
      </bs-input-text>
      <bs-input-image ref="image" title="Image" :placeholder="this.$root.route('file.image.show', { id: this.story.image_id })
        " id="image">
      </bs-input-image>

      <bs-input-text ref="tags" title="Tags" id="tags"> </bs-input-text>
    </div>
    <div class="grid grid-cols-1 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full">
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
        this.story.route_story_update,
        {
          image: this.$refs.image.value,
          title: this.$refs.title.value,
          description: this.$refs.description.value,
        },
        this
      );
    },
  },
  props: ["story"],
};
</script>
