<template>
  <tr :class="this.getDateClass()">
    <td v-if="this.item.meta?.renew_at?.date && !this.item.hidden_at">
      <components-timestamp :time="this.item.meta?.renew_at?.time" :timestamp="this.item.meta?.renew_at?.date"></components-timestamp>
      <div v-if="this.item.meta?.renew_at?.time" class="whitespace-nowrap">Saat: {{ this.item.meta?.renew_at?.time }}</div>
    </td>
<td v-if="this.item.hidden_at">
<div>Kapalı</div>
</td>
    <td v-if="!this.item.meta?.renew_at?.date && ! this.item.hidden_at">
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
      <div class="text-xs">
        {{ this.item.customer_id }}
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
      <div class="text-xs whitespace-nowrap" v-if="this.item.meta?.premium ?? false">Premium</div>
      <div class="text-xs whitespace-nowrap" v-if="!this.item.meta?.premium ?? false">Basic</div>
      <div class="text-xs whitespace-nowrap" v-if="this.item.meta?.highlight ?? false">Highlight</div>
      <div class="text-xs whitespace-nowrap" v-if="!this.item.meta?.highlight ?? false">Basic</div>
    </td>
    <td>
      <div class="text-xs whitespace-nowrap" v-if="this.item.meta">V: {{ this.item.meta['view_count'] ?? 0 }}</div>
      <div class="text-xs whitespace-nowrap" v-if="!this.item.meta">0</div>
    </td>
    <td>
      <div class="flex flex-row items-center justify-center gap-1">
<a class="btn btn-xs" :href="'https://wa.me/' + this.item.customer.whatsapp_phone_number.replaceAll('(', '').replaceAll(')', '').replaceAll(' ', '')">WhatsApp'tan yaz</a>
        <components-link-icon v-if="!this.item.hidden_at"
          :href="this.$root.route('employee.article.disable', { id: this.item.id })"
          icon="fa-eye-slash"></components-link-icon>
        <components-link-icon v-if="this.item.hidden_at"
          :href="this.$root.route('employee.article.enable', { id: this.item.id })" icon="fa-eye"></components-link-icon>
        <components-link-icon :href="this.$root.route('employee.article.edit', { id: this.item.id })"
          icon="fa-pen"></components-link-icon>
        <components-link-icon target="_blank" v-if="!this.item.hidden_at" :href="this.item.routes.amp"
          icon="fa-up-right-from-square"></components-link-icon>
        <components-link-icon v-if="this.item.hidden_at"
          :href="this.$root.route('employee.article.destroy', { id: this.item.id })"
          icon="fa-trash"></components-link-icon>
      </div>
    </td>
  </tr>
</template>
<script>
export default {
  props: ["item"],
  methods: {
    getDateClass: function () {
      if (this.item.hidden_at) {
        return "";
      }

      var date = this.item.meta?.renew_at?.date;

      if (!date) {
        return "bg-success";
      }

      date = new Date(date);
      const currentDate = new Date();

      const day = date.getDate();
      const month = date.getMonth();
      const year = date.getFullYear();

      const currentDay = currentDate.getDate();
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      const diffDay = day - currentDay;
      const diffMonth = month - currentMonth;
      const diffYear = year - currentYear;

      if (diffDay == 0 && diffMonth == 0 && diffYear == 0) {
        return 'bg-error';
      }

      if (diffDay == 1 && diffMonth == 0 && diffYear == 0) {
        return "bg-warning";
      }

      return "bg-success";
    }
  },
};
</script>
