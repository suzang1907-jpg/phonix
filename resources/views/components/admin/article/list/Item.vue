<template>
  <div>
    <components-list-item :image="this.item.main_image" :title="this.item.title" :subtitle="this.item.description">
      <div class="flex flex-row gap-2 items-center justify-center">
        <components-link-icon v-if="!this.item.hidden_at"
          :href="this.$root.route('admin.article.disable', { id: this.item.id })"
          icon="fa-eye-slash"></components-link-icon>
        <components-link-icon v-if="this.item.hidden_at"
          :href="this.$root.route('admin.article.enable', { id: this.item.id })" icon="fa-eye"></components-link-icon>
        <components-link-icon :href="this.$root.route('admin.article.edit', { id: this.item.id })"
          icon="fa-pen"></components-link-icon>
        <components-link-icon target="_blank" v-if="!this.item.hidden_at" :href="this.item.routes.amp"
          icon="fa-up-right-from-square"></components-link-icon>
      </div>
    </components-list-item>
    <div class="mt-2 text-xs">
      ID: {{ this.item.id }}
    </div>
    <div v-if="this.item.meta?.note" class="mt-2 text-xs">
      {{ this.item.meta?.note }}
    </div>
    <div :class="this.getDateClass()" v-if="this.item.meta?.renew_at?.date">
      <components-timestamp :timestamp="this.item.meta?.renew_at?.date"></components-timestamp>
      <div v-if="this.item.meta?.renew_at?.time"><span> - </span>{{ this.item.meta?.renew_at?.time }}</div>
      <div v-if="this.item.meta?.price"><span> - </span><span>{{ this.item.meta?.price }}TRY</span></div>
      <div v-if="this.item.meta?.trc20_wallet"><span> - </span><span>{{ this.item.meta?.trc20_wallet }}</span></div>
    </div>
    <div class="flex flex-wrap gap-2 border-b border-b-border py-2 mb-4">
      <components-badge-info>{{ this.item.analytics[0]?.view_count ?? '0' }}
        Views</components-badge-info>
      <components-badge-error icon="fa-xmark" v-if="this.item.hidden_at">Disabled</components-badge-error>
      <components-badge-success icon="fa-check" v-if="!this.item.hidden_at">Enabled</components-badge-success>
      <components-badge-info icon="fa-location-pin" v-if="!this.item.location">Global</components-badge-info>
      <components-badge-info icon="fa-location-pin" v-if="this.item.location">{{
        this.item.location.localized_name }}</components-badge-info>

      <components-badge-info v-if="this.item.telegram">{{ this.item.telegram
        }}</components-badge-info>

      <components-badge-info v-if="this.item.adsterra_link">{{ this.item.adsterra_link
        }}</components-badge-info>

      <components-badge-info v-if="this.item.ad_link">{{ this.item.ad_link }}</components-badge-info>

      <components-badge-info v-if="this.item.meta?.chat_enabled">Online Chat</components-badge-info>

      <components-badge-info
        v-if="this.item.customer_id && this.item.customer_username">Customer</components-badge-info>

      <components-badge-info v-if="this.item.meta?.online">Online</components-badge-info>

      <components-badge-info icon="fa-phone" v-if="this.item.whatsapp_number">WP: {{
        this.item.whatsapp_number }}</components-badge-info>
      <components-badge-info icon="fa-phone" v-if="this.item.phone_number">{{ this.item.phone_number
        }}</components-badge-info>
    </div>
  </div>
</template>
<script>
export default {
  props: ["item"],
  methods: {
    getDateClass: function () {
      var date = this.item.meta?.renew_at?.date;

      if (!date) {
        return "text-xs flex flex-row gap-1 mt-2 bg-success p-1 w-full";
      }

      date = new Date(date);
      const currentDate = new Date();

      const hours = date.getHours();
      const day = date.getDate();
      const month = date.getMonth();
      const year = date.getFullYear();

      const currentHours = currentDate.getHours();
      const currentDay = currentDate.getDate();
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      const diffDay = day - currentDay;
      const diffMonth = month - currentMonth;
      const diffYear = year - currentYear;

      if (diffDay == 0 && diffMonth == 0 && diffYear == 0) {
        return 'text-xs flex flex-row gap-1 mt-2 bg-error p-1 w-full';
      }

      if (diffDay == 1 && diffMonth == 0 && diffYear == 0) {
        return "text-xs flex flex-row gap-1 mt-2 bg-warning p-1 w-full";
      }

      return "text-xs flex flex-row gap-1 mt-2 bg-success p-1 w-full";
    }
  },
};
</script>
