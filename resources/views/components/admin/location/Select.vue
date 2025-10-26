<template>
  <div v-if="this.location" class="flex flex-col gap-2">

    <bs-input-text readonly class="max-w-none" title="Location" :placeholder="this.location.country?.country +
          (this.location.city?.city ? ' / ' + this.location.city?.city : '' ) +
          (this.location.district?.district ? ' / ' + this.location.district?.district : '')">
    </bs-input-text>

    <bs-button-solid @onclick="this.changeLocation">
       Change Location
    </bs-button-solid>
  </div>
  <div v-if="!this.location" class="flex flex-col gap-2">
    <bs-input-text class="max-w-none"  ref="search" @input="this.fetchLocations" title="Location">
    </bs-input-text>
    <bs-input-select @onchange="this.onSelect" class="max-w-none" v-if="this.locations && this.locations.length != 0" title="Locations">
      <template v-for="(item) of locations">
        <bs-input-select-option :value="item.id">
          {{ item.country?.country }}
          {{ item.city?.city ? ' / ' + item.city?.city : '' }}
          {{ item.district?.district ? ' / ' + item.district?.district : '' }}
        </bs-input-select-option>
      </template>
    </bs-input-select>
  </div>
</template>
<script>

import ApiRequest from '../../../../js/utils/api/ApiRequest';

export default {
  data() {
    return {
      locations: [],
      location: this.$props.xlocation ?? null,
    };
  },
  methods: {
    changeLocation: function () {
      this.location = null;
    },
    onSelect: function (location) {
      const l = this.locations.filter((a) => {
        if (a.id == location.target.value) {
          return a;
        }
      })[0];

      this.location = l;
      this.locations = [];
    },
    fetchLocations: async function () {
      const response = await ApiRequest.post(
        "/api/location/search",
        {
          search: this.$refs.search.value
        },
        this,
        {
          showLoadingOverlay: false,
          hideLoadingOverlay: false
        }
      );

      if (!response.ok()) {
        return;
      }

      this.locations = response.getData('locations');
    },
  },
  props: [
    "xlocation",
  ],
};
</script>
