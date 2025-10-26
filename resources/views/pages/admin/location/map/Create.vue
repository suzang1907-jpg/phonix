<template>
  <div class="flex flex-col h-full flex-grow">
    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-2 p-6 max-w-xl lg:max-w-max mx-auto lg:mx-0 w-full"
    >
      <bs-input-text
        ref="url"
        title="Url"
        id="url"
        :required="true"
      ></bs-input-text>
      
    <components-admin-location-select ref="location">
    </components-admin-location-select>
      <div>
        <bs-button-solid @onclick="this.submit">Create</bs-button-solid>
      </div>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      await ApiRequest.post(
        "/admin/map/store",
        {
          url: this.$refs.url.value,
          map_location_id: this.$refs.location.location?.id,
        },
        this
      );
    },
  },
  props: [],
};
</script>
