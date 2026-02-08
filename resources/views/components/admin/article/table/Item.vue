<template>
  <tr :class="this.getDateClass()">
    <td v-if="this.item.meta?.renew_at?.date">
      <components-timestamp :timestamp="this.item.meta?.renew_at?.date"></components-timestamp>
      <div v-if="this.item.meta?.renew_at?.time" class="whitespace-nowrap">{{ this.item.meta?.renew_at?.time }}</div>
    </td>
    <td v-if="!this.item.meta?.renew_at?.date">
      <div>
        -
      </div>
      <div>
        -
      </div>
    </td>
    <td v-if="!this.item.customer_id">
      <div class="text-xs">
        -
      </div>
    </td>
    <td v-if="this.item.customer_id">
      <div>
        <div class="text-xs">
          {{ this.item.customer_id }}
        </div>
          <div v-if="this.item.customer" class="text-xs">
          {{ this.item.customer.whatsapp_phone_number }}
        </div>
        <a v-if="this.item.customer" target="_blank" class="btn btn-xs"
          :href="'https://wa.me/' + this.item.customer.whatsapp_phone_number.replaceAll(' ', '').replaceAll('-', '')">Mesaj
          yaz</a>
      </div>
    </td>
    <td>
      <p class="whitespace-nowrap">{{ this.item.title }}</p>

      <p v-if="this.item.meta?.note" class="text-xs">
        {{ this.item.meta?.note }}
      </p>
    </td>
    <td>
      <div class="text-xs whitespace-nowrap" v-if="this.item.phone_number">P: {{ this.item.phone_number }}</div>
      <div class="text-xs whitespace-nowrap" v-if="this.item.whatsapp_number">WP: {{ this.item.whatsapp_number }}</div>
      <div class="text-xs whitespace-nowrap" v-if="this.item.telegram">T: {{ this.item.telegram }}</div>
    </td>
    <td>
      <div class="text-xs whitespace-nowrap" v-if="this.item.meta">V: {{ this.item.meta['view_count'] ?? 0 }}</div>
      <div class="text-xs whitespace-nowrap" v-if="!this.item.meta">0</div>
      <a target="_blank" class="btn btn-xs whitespace-nowrap" :href="this.getGoogleAnalyticsLink()">Google Analytics</a>
    </td>
    <td>
      <div class="flex flex-row items-center justify-center gap-1">
        <components-link-icon v-if="!this.item.hidden_at"
          :href="this.$root.route('admin.article.disable', { id: this.item.id })"
          icon="fa-eye-slash"></components-link-icon>
        <components-link-icon v-if="this.item.hidden_at"
          :href="this.$root.route('admin.article.enable', { id: this.item.id })" icon="fa-eye"></components-link-icon>
        <components-link-icon :href="this.$root.route('admin.article.edit', { id: this.item.id })"
          icon="fa-pen"></components-link-icon>
        <components-link-icon target="_blank" v-if="!this.item.hidden_at" :href="this.item.routes.amp"
          icon="fa-up-right-from-square"></components-link-icon>
        <components-link-icon v-if="this.item.hidden_at"
          :href="this.$root.route('admin.article.destroy', { id: this.item.id })"
          icon="fa-trash"></components-link-icon>
      </div>
    </td>
  </tr>
</template>
<script>
import dayjs from 'dayjs';
import isSameOrBefore from 'dayjs/plugin/isSameOrBefore';
dayjs.extend(isSameOrBefore);

export default {
  props: ["item"],
  methods: {
    formatDate: function (date) {
      const year = date.getFullYear();
      const month = String(date.getMonth() + 1).padStart(2, '0');
      const day = String(date.getDate()).padStart(2, '0');
      const format = `${year}${month}${day}`;

      return format;
    },
    getGoogleAnalyticsLink: function () {
      const today = new Date();
      const todayFormatted = this.formatDate(today);
      const yesterday = new Date(today);
      yesterday.setDate(today.getDate() - 1);
      const yesterdayFormatted = this.formatDate(yesterday);
      let link = 'https://analytics.google.com/analytics/web/#/a290955276p413408402/reports/explorer?params=_r.explorerCard..selmet%3D%5B"eventCount"%5D%26_r.explorerCard..seldim%3D%5B"eventName","landingPage"%5D%26_r.explorerCard..selectedRows%3D%5B"click_whatsapp"%5D%26_r.explorerCard..filterTerm%3Dclick_whatsapp%26_r.explorerCard..startRow%3D0%26_r..dataFilters%3D%5B%7B"type":1,"fieldName":"landingPage","evaluationType":3,"expressionList":%5B"' + this.item.id + '"%5D,"complement":false,"isCaseSensitive":true,"expression":""%7D%5D%26_u.comparisonOption%3Ddisabled%26_r.copa-filter-builder..filter-to-edit%3D%5B%7B"type":1,"fieldName":"landingPage","evaluationType":3,"expressionList":%5B"' + this.item.id + '"%5D,"complement":false,"isCaseSensitive":true,"expression":""%7D%5D%26_u.date00%3D' + yesterdayFormatted + '%26_u.date01%3D' + todayFormatted + '&r=top-events';
      return link;
    },
    getDateClass: function () {
      if (this.item.hidden_at) {
        return "";
      }

      if (this.item.title == "**") {
        return "bg-info text-info-content";
      }

      const dateString = this.item.meta?.renew_at?.date;

      if (!dateString) {
        return "bg-success text-success-content";
      }

      // Normalize to the date-only portion to avoid timezone shifts
      // (e.g. timestamps like "2026-02-09T00:00:00.000Z" can become the
      // previous day in local timezones). Using only the YYYY-MM-DD part
      // ensures comparisons are date-based and not affected by TZ offsets.
      const dateOnly = String(dateString).split('T')[0];
      const dateToCheck = dayjs(dateOnly, 'YYYY-MM-DD', true).startOf('day');
      const today = dayjs().startOf('day');
      const tomorrow = dayjs().add(1, 'day').startOf('day');

      if (dateToCheck.isSameOrBefore(today, 'day')) {
        return 'bg-error text-error-content';
      }

      if (dateToCheck.isSame(tomorrow, 'day')) {
        return "bg-warning text-warning-content";
      }

      return "bg-success text-success-content";
    }
  },
};
</script>