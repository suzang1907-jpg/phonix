<template>
  <div class="flex flex-row items-start">
    <div class="h-min flex bg-background rounded-md max-w-40 w-full">
      <label class="text-invert flex py-2 px-6 text-sm"
        >{{ this.title }}{{ this.required ? "*" : "" }}</label
      >
    </div>
    <div class="w-full flex flex-col ml-1">
      <input
        class="pl-6 pr-2 py-2 bg-input outline-none w-full rounded-md text-sm"
        :required="this.required"
        v-model="this.value"
        :type="this.type"
        :id="this.id"
        :name="this.id"
        :placeholder="this.placeholder ?? this.title"
      />
      <p v-if="this.hint" class="mt-1 text-xs text-invert">
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
  props: ["placeholder", "id", "type", "required", "title", "hint", "xvalue"],
};
</script>
