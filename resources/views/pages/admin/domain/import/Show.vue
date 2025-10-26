<template>
  <div class="flex flex-col h-full flex-grow">
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-input-file ref="csv" title="CSV" id="csv"></bs-input-file>
      <bs-input-text
        ref="key_count"
        title="Key count"
        id="key_count"
      ></bs-input-text>

      <div>
        <bs-button-solid @onclick="this.submit">Import</bs-button-solid>
      </div>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      var csv = this.$refs.csv.value;

      await ApiRequest.post(
        "/admin/domain/import",
        {
          backup: csv,
          key_count: this.$refs.key_count.value,
        },
        this
      );
    },
  },
  props: [],
};
</script>
