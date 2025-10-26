<template>
  <div class="flex flex-col items-start w-full mt-12">
    <p class="w-full">Yorum yaz</p>
    <textarea
      ref="comment"
      placeholder="Yorumunu buraya yaz..."
      class="m-0 p-2 bg-input text-invert min-h-24 mt-2 w-full rounded-lg outline-none"
    ></textarea>
    <button v-on:click="send" class="mt-2 px-2 py-1 bg-primary-500 text-primary-text rounded-lg">Yorumu gönder</button>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";
export default {
  props: ["blog"],
  methods: {
    async send() {
      const comment = this.$refs.comment.value;

      if (!comment) {
        return;
      }

      await ApiRequest.post(
        "/blog/" + this.blog.id + "/comment/store",
        { comment: comment },
        this,
        {
          showLoadingOverlay: false,
        }
      );
    },
  },
};
</script>
