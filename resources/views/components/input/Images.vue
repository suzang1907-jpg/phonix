<template>
  <div class="flex flex-col overflow-x-scroll">
    <div class="h-min flex bg-gray-200 rounded-md max-w-40 w-full">
      <label class="text-black flex py-2 px-6 text-sm"
        >{{ this.title }}{{ this.required ? "*" : "" }}</label
      >
    </div>
    <div class="ml-1 flex flex-col w-full relative">
      <div class="w-full relative flex flex-col">
<div v-if="this.value" class="flex flex-col w-full">
<template v-for="(item, index) in this.value" :key="index">
<div class="max-h-56 h-56 w-56">
        <img

          v-if="item"
          :src="item"
          class="rounded-md mb-1 border border-gray-200 h-full max-h-56 object-contain aspect-square w-56"
        />
</div>
</template>
</div>
<div v-if="( !this.value ||this.value.length == 0) && this.placeholder && this.placeholder.length != 0" class="flex flex-col w-full">
<template v-for="(item, index) in this.placeholder" :key="index">
<div class="max-h-56 w-56 h-56">
        <img

          v-if="item"
          :src="item"
          class="rounded-md mb-1 border border-gray-200 h-full max-h-56 object-contain aspect-square w-56"
        />
</div>
</template>
</div>
    <div class="absolute top-2 right-2 z-0"
>          <components-button-secondary
            class="mb-1"
            v-if="this.value"
            :click="clear"
          >
            Kaldır
          </components-button-secondary>
        </div>
      </div>
      <input
        v-bind:class="{
          'pl-6 pr-2 py-2 bg-gray-100 outline-none w-full rounded-md text-sm':
            !this.value,
          'pl-6 pr-2 py-2 bg-gray-100 outline-none w-full rounded-md text-sm hidden':
            this.value,
        }"
        :required="this.required"
        type="file"
        :accept="this.accept ?? 'image/*'"
        :id="this.id"
        :name="this.id"
        multiple
        v-on:change="onChange"
        ref="input"
      />
      <p v-if="this.hint" class="mt-1 text-xs text-gray-900">
        {{ this.hint }}
      </p>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      value: this.$props.xvalue,
    };
  },
  methods: {
    clear: function () {
      this.$refs.input.value = "";
      this.value = "";
    },
reduceBase64Quality: async function (dataURL, quality) {
    return new Promise((resolve) => {
    const img = new Image();
    img.onload = () => {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      canvas.width = img.width;
      canvas.height = img.height;
      ctx.drawImage(img, 0, 0);
      const newDataURL = canvas.toDataURL('image/jpeg', quality);
      resolve(newDataURL);
    };
    img.src = dataURL;
  });
},
    onChange(event) {
      const files = event.target.files;
var images = [];
for (var file of files){
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = () => {
this.reduceBase64Quality(reader.result, 0.25).then((rq) => {
images.push(rq);
this.value = images;
});
       
      };
      reader.onerror = (error) => {
        console.log("Error: ", error);
      };}
    },
  },
  props: ["placeholder", "id", "accept", "required", "title", "hint", "xvalue"],
};
</script>
