<template>
  <div class="flex flex-col items-start">
    <div class="w-full">
      <label class="flex text-sm">{{ this.title }}{{ this.required ? "*" : "" }}</label>
    </div>
    <div class="ml-1 flex flex-col w-full relative">
      <div class="max-h-56 relative flex">
        <img v-if="this.value" :src="this.value"
          class="rounded-md mb-1 border border-base-300 w-full h-full max-h-56 object-contain" />
        <img v-if="!this.value && this.placeholder" :src="this.placeholder"
          class="rounded-md mb-1 border border-base-300 w-full h-full max-h-56 object-contain" />
        <div class="absolute top-2 right-2 z-0">
          <button class="mb-1 btn btn-error btn-sm" v-if="this.value" v-on:click="clear">
            Kaldır
          </button>
        </div>
      </div>
      <input v-bind:class="{
        'input w-full':
          !this.value,
        'input w-full hidden':
          this.value,
      }" :required="this.required" type="file" :accept="this.accept ?? 'image/*'" :id="this.id" :name="this.id"
        v-on:change="onChange" ref="input" />
      <p v-if="this.hint" class="mt-1 text-xs">
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
      const file = event.target.files[0];
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onload = () => {
        this.reduceBase64Quality(reader.result, 0.25).then((rq) => {
          this.value = rq;
        });

      };
      reader.onerror = (error) => {
        console.log("Error: ", error);
      };
    },
  },
  props: ["placeholder", "id", "accept", "required", "title", "hint", "xvalue"],
};
</script>
