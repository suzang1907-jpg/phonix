<template>
  <div
    class="w-full grid grid-cols-3 h-full p-2 flex-grow min-h-[512px] gap-2 text-invert"
  >
    <textarea
      class="col-span-1 outline-none no-scroll-bar p-2 border border-border rounded-xl bg-background"
      v-model="raw"
      placeholder="Enter markdown"
    ></textarea>
    <div
      class="col-span-2 markdown p-2 border border-border rounded-xl overflow-x-hidden overflow-y-scroll no-scroll-bar flex flex-col"
      v-html="this.compiledMarkdown"
    ></div>
  </div>
</template>
<script>
import { marked, Renderer } from "marked";

export default {
  data() {
    var tmpRenderer = new Renderer();

    tmpRenderer.code = function (code, infostring, escaped) {
      const tag = "code";

      var classes = "border border-border rounded-xl p-2 mt-2";

      return "<" + tag + " class='" + classes + "'>" + code + "</" + tag + ">";
    };

    tmpRenderer.heading = function (body, level, raw) {
      const tag = "h" + level;
      const size = 5 - level;
      const fontSize = size < 2 ? "text-xl" : "text-" + size + "xl";
      var classes = fontSize + " font-bold";

      var temp =
        "<" + tag + " class='" + classes + "'>" + body + "</" + tag + ">";

      return temp;
    };

    return {
      renderer: tmpRenderer,
      value: "",
      raw: this.$props.xvalue ?? "",
    };
  },
  computed: {
    compiledMarkdown: function () {
      this.value = marked(this.raw, { async: false, renderer: this.renderer });
      return this.value;
    },
  },
  props: ["xvalue"],
};
</script>
