<template>
  <components-input-form>
    <bs-input-text class="max-w-none" :xvalue="this.project.name" ref="name" title="Web name" id="name"
      name="name"></bs-input-text>
    <bs-input-text class="max-w-none" :xvalue="this.project.amp_name" ref="amp_name" title="Amp name" id="amp_name"
      name="amp_name"></bs-input-text>

    <components-admin-location-select :xlocation="this.project.location" ref="location">
    </components-admin-location-select>

    <bs-input-text class="max-w-none" :xvalue="this.project.support_phone_number" ref="support_phone_number"
      title="Support phone" id="support_phone_number" name="support_phone_number"></bs-input-text>

    <bs-input-image class="max-w-none" :placeholder="this.project.amp_logo_id
      ? this.$root.route('file.image.show', {
        id: this.project.amp_logo_id,
      })
      : null
      " ref="amp_logo" id="amp_logo" name="amp_logo" title="Amp Logo"></bs-input-image>

    <bs-input-image class="max-w-none" :placeholder="this.project.logo_id
      ? this.$root.route('file.image.show', { id: this.project.logo_id })
      : null
      " ref="logo" id="logo" name="logo" title="Logo"></bs-input-image>

    <bs-input-image class="max-w-none" :placeholder="this.project.support_banner_id
      ? this.$root.route('file.image.show', {
        id: this.project.support_banner_id,
      })
      : null
      " ref="banner" id="banner" name="banner" title="Banner"></bs-input-image>

    <bs-input-text class="max-w-none" :xvalue="this.project.location_description" ref="location_description"
      title="Location Description" id="location_description" name="location_description"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.location_text" ref="location_text" title="Location Text"
      id="location_text" name="location_text"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.google_tag" ref="google_tag" title="Google Tag"
      id="google_tag" name="google_tag"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.cloudflare_api_key" ref="cloudflare_api_key"
      title="Cloudflare Api Key" id="cloudflare_api_key" name="cloudflare_api_key"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.cloudflare_api_email" ref="cloudflare_api_email"
      title="Cloudflare Api Email" id="cloudflare_api_email" name="cloudflare_api_email"></bs-input-text>

    <bs-input-image class="max-w-none" :placeholder="this.project.article_banner_id
      ? this.$root.route('file.image.show', {
        id: this.project.article_banner_id,
      })
      : null
      " ref="article_banner" id="article_banner" name="article_banner" title="Article banner"></bs-input-image>
    <bs-input-image class="max-w-none" :placeholder="this.project.article_watermark_id
      ? this.$root.route('file.image.show', {
        id: this.project.article_watermark_id,
      })
      : null
      " ref="article_watermark" id="article_watermark" name="article_watermark"
      title="Article watermark"></bs-input-image>

    <bs-input-text class="max-w-none" :xvalue="this.project.api_key" ref="api_key" title="Api Key" id="api_key"
      name="api_key"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.api_ips" ref="api_ips" title="Api IP's" id="api_ips"
      name="api_ips"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.server_ip" ref="server_ip" title="Server IP" id="server_ip"
      name="server_ip"></bs-input-text>

    <p class="mt-2">Meta Data</p>

    <bs-input-text class="max-w-none" :xvalue="this.project.meta_data?.app_name" ref="meta_data_app_name"
      title="App Name" id="meta_data_app_name" name="meta_data_app_name"></bs-input-text>

    <bs-input-text class="max-w-none" :xvalue="this.project.meta_data?.highlight_text_color"
      ref="meta_data_highlight_text_color" title="Highlight Text Color" id="meta_data_highlight_text_color"
      name="meta_data_highlight_text_color" @input="onColorChange"></bs-input-text>

    <div v-if="this.highlight_text_color" class="h-2 w-full" :style="{
      backgroundColor: this.highlight_text_color,
    }"></div>

    <p class="mt-2">Amp</p>

    <bs-input-text class="max-w-none" :xvalue="this.project.meta_data?.amp?.primary_color"
      ref="meta_data_amp_primary_color" title="Primary Color" id="meta_data_amp_primary_color"
      name="meta_data_amp_primary_color" @input="onColorChange"></bs-input-text>

    <div v-if="this.primary_color" class="h-2 w-full" :style="{
      backgroundColor: this.primary_color,
    }"></div>

    <bs-input-text class="max-w-none" :xvalue="this.project.meta_data?.amp?.secondary_color"
      ref="meta_data_amp_secondary_color" title="Secondary Color" id="meta_data_amp_secondary_color"
      name="meta_data_amp_secondary_color" @input="onColorChange"></bs-input-text>

    <div v-if="this.secondary_color" class="h-2 w-full" :style="{
      backgroundColor: this.secondary_color,
    }"></div>

    <bs-input-select :xvalue="this.project.meta_data?.amp?.grid_cols ?? 2" ref="meta_data_amp_grid_cols"
      title="Grid Cols" id="meta_data_amp_grid_cols" name="meta_data_amp_grid_cols">
      <bs-input-select-option value="2">2</bs-input-select-option>
      <bs-input-select-option value="3">3</bs-input-select-option>
    </bs-input-select>

    <bs-input-select :xvalue="this.project.meta_data?.amp?.grid_gap ?? 0.5" ref="meta_data_amp_grid_gap"
      title="Grid Gap" id="meta_data_amp_grid_gap" name="meta_data_amp_grid_gap">
      <bs-input-select-option value="0.25">0.25</bs-input-select-option>
      <bs-input-select-option value="0.5">0.5</bs-input-select-option>
      <bs-input-select-option value="1">1</bs-input-select-option>
    </bs-input-select>

    <bs-button-solid @onclick="this.submit"> Save project </bs-button-solid>
  </components-input-form>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  data() {
    return {
      primary_color: this.project.meta_data?.amp?.primary_color,
      secondary_color: this.project.meta_data?.amp?.secondary_color,
      highlight_text_color: this.project.meta_data?.highlight_text_color,
    };
  },
  methods: {
    onColorChange() {
      this.primary_color = this.$refs.meta_data_amp_primary_color.value;
      this.secondary_color = this.$refs.meta_data_amp_secondary_color.value;
      this.highlight_text_color = this.$refs.meta_data_highlight_text_color.value;
    },
    submit: async function () {
      var meta_data = {
        app_name: this.$refs.meta_data_app_name.value,
        highlight_text_color: this.$refs.meta_data_highlight_text_color.value,
        amp: {
          primary_color: this.$refs.meta_data_amp_primary_color.value,
          secondary_color: this.$refs.meta_data_amp_secondary_color.value,
          grid_cols: this.$refs.meta_data_amp_grid_cols.value,
          grid_gap: this.$refs.meta_data_amp_grid_gap.value
        },
      };

      await ApiRequest.post(
        this.$root.route("admin.project.update", {
          id: this.project.id,
        }),
        {
          name: this.$refs.name.value,
          amp_name: this.$refs.amp_name.value,
          support_phone_number: this.$refs.support_phone_number.value,
          logo: this.$refs.logo.value,
          amp_logo: this.$refs.amp_logo.value,
          support_banner: this.$refs.banner.value,
          google_tag: this.$refs.google_tag.value,
          location_description: this.$refs.location_description.value,
          article_banner: this.$refs.article_banner.value,
          article_watermark: this.$refs.article_watermark.value,
          cloudflare_api_key: this.$refs.cloudflare_api_key.value,
          cloudflare_api_email: this.$refs.cloudflare_api_email.value,
          location_id: this.$refs.location.location?.id,
          location_text: this.$refs.location_text.value,
          api_key: this.$refs.api_key.value,
          api_ips: this.$refs.api_ips.value,
          server_ip: this.$refs.server_ip.value,
          meta_data: meta_data,
        },
        this
      );
    },
  },
  props: ["project"],
};
</script>
