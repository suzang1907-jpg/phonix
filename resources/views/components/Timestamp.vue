<template>
  <div class="text-xs text-invert">
    {{ this.format() }}
  </div>
</template>
<script>
export default {
  methods: {
    format: function () {
      let date = new Date(this.timestamp);
      try {
        if (this.time) {
          date.setTime(date.getTime() + this.time * 3_600_000);
        }
      }
      catch (e) { }
      const hours = date.getHours();
      const day = date.getDate();
      const month = date.getMonth();
      const year = date.getFullYear();

      const currentDate = new Date();

      const currentHours = currentDate.getHours();
      const currentDay = currentDate.getDate();
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      const diffHours = currentHours - hours;
      const diffDay = day - currentDay;
      const diffMonth = month - currentMonth;
      const diffYear = year - currentYear;

      if (diffMonth > 0) {
        return day + "." + (month + 1) + "." + year;
      }

      if (diffDay == 1) {
        return day + "." + (month + 1) + "." + year + " / Yarın";
      }

      if (diffDay > 0) {
        return day + "." + (month + 1) + "." + year + " / " + diffDay + " Gün";
      }

      if (date.getTime() > currentDate.getTime()) {
        return day + "." + (month + 1) + "." + year;
      }

      if (diffDay == 0 && diffMonth == 0 && diffYear == 0) {
        if (diffHours < 1) {
          const minutes = date.getMinutes();
          const currentMinutes = currentDate.getMinutes();
          const diffMinutes = currentMinutes - minutes;
          if (diffMinutes < 1) {
            return day + "." + (month + 1) + "." + year + " / Bugün";
          }
          return day + "." + (month + 1) + "." + year + " / Bugün";
        }

        return day + "." + (month + 1) + "." + year + " / Bugün";
      }

      if (diffDay == -1 && diffMonth == 0 && diffYear == 0) {
        return day + "." + (month + 1) + "." + year + " / Dün";
      }

      return day + "." + (month + 1) + "." + year;
    },
  },
  props: ["timestamp", "time"],
};
</script>
