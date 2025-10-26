<template>
  <div class="flex flex-col h-full flex-grow">
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-input-text
        ref="client_id"
        title="Client id"
        id="client_id"
        :required="true"
      ></bs-input-text>
      <bs-input-file
        ref="client_credentials"
        title="Client credentials"
        :required="true"
        id="client_credentials"
      ></bs-input-file>

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
      await ApiRequest.post(
        "/admin/googleintegration/store",
        {
          client_id: this.$refs.client_id.value,
          client_credentials: this.$refs.client_credentials.value,
        },
        this
      );
    },
  },
  props: [],
};
</script>
