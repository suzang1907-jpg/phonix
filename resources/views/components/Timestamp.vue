<template>
  <div class="text-xs text-invert">
    {{ this.format() }}
  </div>
</template>
<script>
import dayjs from 'dayjs';

export default {
  props: ["timestamp", "time"],
  methods: {
    format: function () {
      let date;

      try {
        const raw = this.timestamp;
        const dateOnly = String(raw).split('T')[0];
        date = dayjs(dateOnly, 'YYYY-MM-DD', true);

        // Fallback to full parse if date-only parsing fails
        if (!date.isValid()) {
          date = dayjs(raw);
        }

        if (this.time) {
          date = date.add(this.time, 'hour');
        }

        if (!date.isValid()) {
          return 'Invalid Date';
        }

      } catch (e) {
        return 'Invalid Date';
      }

      const dateString = date.format('DD.MM.YYYY');

      const today = dayjs().startOf('day');
      
      const targetDate = date.startOf('day');
      
      const yesterday = today.subtract(1, 'day');
      const tomorrow = today.add(1, 'day');

      if (targetDate.isSame(today, 'day')) {
        return `${dateString} / Bugün`;
      }

      if (targetDate.isSame(tomorrow, 'day')) {
        return `${dateString} / Yarın`;
      }
      
      if (targetDate.isSame(yesterday, 'day')) {
        return `${dateString} / Dün`;
      }

      if (targetDate.isBefore(yesterday, 'day')) {
        return dateString;
      }
      
      if (targetDate.isAfter(tomorrow, 'day')) {
        const diffDays = targetDate.diff(today, 'day');
        return `${dateString} / ${diffDays} Gün`;
      }
      
      return dateString;
    },
  },
};
</script>