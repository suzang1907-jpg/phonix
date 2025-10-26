<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <bs-input-text :xvalue="this.domainmodel.domain" ref="domain" title="Domain" id="domain"
      :required="true"></bs-input-text>
    <bs-input-text :xvalue="this.domainmodel.name" ref="name" title="Name" id="name"></bs-input-text>

    <bs-input-select :xvalue="this.domainmodel.type" ref="type" title="Type" id="type">
      <bs-input-select-option value="primary">
        Primary
      </bs-input-select-option>
      <bs-input-select-option value="offer_list">
        Article list
      </bs-input-select-option>
      <bs-input-select-option value="offer_show">
        Article show
      </bs-input-select-option>
    </bs-input-select>

    <components-admin-location-select :xlocation="this.domainmodel.location"
      ref="location"></components-admin-location-select>

    <bs-input-text :xvalue="this.domainmodel.cloudflare_zone_identifier" ref="cloudflare_zone_identifier"
      title="Cloudflare zone identifier" id="cloudflare_zone_identifier"></bs-input-text>

    <div>
      <bs-button-solid @onclick="this.submit" class="w-full mt-2">
        Update domain
      </bs-button-solid>
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

      var meta = {};

      await ApiRequest.post(
        "/admin/domain/" + this.domainmodel.id + "/update",
        {
          meta: meta,
          domain: domain,
          name: name,
          type: type,
          location_id: this.$refs.location.location?.id,
          domain_location_id: this.$refs.location.location?.id,
          cloudflare_zone_identifier:
            this.$refs.cloudflare_zone_identifier.value,
        },
        this
      );
    },
  },
  props: ["domainmodel"],
};
</script>
