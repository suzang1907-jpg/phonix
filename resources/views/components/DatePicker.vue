<template>
  <div class="flex flex-col gap-1">
    <label v-if="title" class="text-sm font-medium">{{ title }}</label>
    <input
      :id="id"
      :name="name"
      type="date"
      class="input input-sm"
      :value="internalDate"
      @input="onInput($event.target.value)"
    />
  </div>
</template>
<script>
export default {
  props: {
    xvalue: { required: false },
    title: { type: String, required: false },
    id: { type: String, required: false },
    name: { type: String, required: false }
  },
  data() {
    return {
      // internalDate is always YYYY-MM-DD or null
      internalDate: null,
    };
  },
  mounted() {
    this.setFromX(this.xvalue);
  },
  watch: {
    xvalue(newVal) {
      this.setFromX(newVal);
    }
  },
  methods: {
    setFromX(raw) {
      if (!raw) {
        this.internalDate = null;
        return;
      }

      try {
        // Prefer date-only part to avoid timezone shifts
        const asString = String(raw);
        const dateOnly = asString.split('T')[0];

        // validate YYYY-MM-DD quickly
        if (/^\d{4}-\d{2}-\d{2}$/.test(dateOnly)) {
          this.internalDate = dateOnly;
          return;
        }

        // Fallback: try constructing a Date and extracting the YYYY-MM-DD
        const parsed = new Date(raw);
        if (!isNaN(parsed.getTime())) {
          const y = parsed.getFullYear();
          const m = String(parsed.getMonth() + 1).padStart(2, '0');
          const d = String(parsed.getDate()).padStart(2, '0');
          this.internalDate = `${y}-${m}-${d}`;
          return;
        }

        this.internalDate = null;
      } catch (e) {
        this.internalDate = null;
      }
    },
    // Called when user picks a date in the control
    onInput(value) {
      // value is YYYY-MM-DD by browser for input[type=date]
      this.internalDate = value || null;
      this.$emit('change', this.internalDate);
    }
  },
  computed: {
    // External code can read this.$refs.foo.value to get the date-only string
    value() {
      return this.internalDate;
    }
  }
};
</script>
