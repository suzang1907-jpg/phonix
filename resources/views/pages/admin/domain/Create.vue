<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <bs-input-text
      ref="domain"
      title="Domain"
      id="domain"
      :required="true"
    ></bs-input-text>
    <bs-input-text
      ref="name"
      title="Name"
      id="name"
    ></bs-input-text>

    <bs-input-select ref="type" title="Type" id="type">
      <bs-input-select-option value="primary"
        >Primary</bs-input-select-option
      >
      <bs-input-select-option value="offer_list"
        >Article list</bs-input-select-option
      >
      <bs-input-select-option value="offer_show"
        >Article show</bs-input-select-option
      >
    </bs-input-select>

    <components-admin-location-select
      ref="location"
    ></components-admin-location-select>

    <bs-input-text
      ref="cloudflare_zone_identifier"
      title="Cloudflare zone identifier"
      id="cloudflare_zone_identifier"
    ></bs-input-text>
    <div>
      <bs-button-solid @onclick="this.submit">Create domain </bs-button-solid>
    </div>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      const domain = this.$refs.domain.value;
      const name = this.$refs.name.value;
      const type = this.$refs.type.value;

      await ApiRequest.post(
        "/admin/domain/store",
        {
          domain_location_id: this.$refs.location.location?.id,
          domain: domain,
          name: name,
          type: type,
          cloudflare_zone_identifier:
            this.$refs.cloudflare_zone_identifier.value,
        },
        this
      );
    },
  },
  props: [],
};
</script>
