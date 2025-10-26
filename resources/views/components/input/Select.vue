<template>
  <div class="flex flex-row items-start">
    <div class="h-min flex bg-input rounded-md max-w-40 w-full">
      <label class="flex py-2 px-6 text-sm text-invert"
        >{{ this.title }}{{ this.required ? "*" : "" }}</label
      >
    </div>
    <div class="flex flex-col w-full ml-1">
      <select
        class="pl-6 pr-2 py-2 bg-input outline-none w-full rounded-md text-sm"
        :required="this.required"
        :id="this.id"
        :name="this.id"
        v-model="this.value"
      >
        <slot />
      </select>
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
  props: ["id", "required", "title", "hint", "xvalue"],
};
</script>
