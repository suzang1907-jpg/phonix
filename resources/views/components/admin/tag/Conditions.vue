<template>
  <div>
    <div>Conditions</div>
    <div v-for="(condition, index) in this.currentConditions" class="mt-2">
      <div class="mb-6">
        <components-input-text
          ref="dataKey"
          id="key"
          title="Key"
          :xvalue="condition.key"
        ></components-input-text>
        <components-input-select
          :xvalue="condition.condition"
          :ref="'dataCondition'"
          title="Condition"
          id="condition"
          class="mt-2"
        >
          <template v-for="(condition, index) in this.conditions">
            <components-input-select-option :xvalue="condition">
              {{ condition }}</components-input-select-option
            >
          </template>
        </components-input-select>
        <components-input-text
          :xvalue="condition.value"
          id="value"
          title="Value"
          class="mt-2"
          ref="dataValue"
        ></components-input-text>
        <components-button-error
          class="mt-2 text-xs"
          type="button"
          v-on:click="this.remove(index)"
          >Remove condition</components-button-error
        >
      </div>
    </div>
    <components-button-primary class="mt-2" type="button" v-on:click="this.add()"
      >Add condition</components-button-primary
    >
  </div>
</template>
<script>
export default {
  methods: {
    add: function () {
      this.currentConditions.push({
        key: "",
        value: "",
        condition: this.conditions[0],
      });
    },

    remove: function (value) {
      this.currentConditions = this.currentConditions.filter(function (item, index) {
        return index !== value;
      });
    },
    save: function () {
      const length = this.currentConditions.length;
      for (var i = 0; i < length; i++) {
        this.currentConditions[i] = {
          key: this.$refs.dataKey[i].value,
          value: this.$refs.dataValue[i].value,
          condition: this.$refs.dataCondition[i].value,
        };
      }
    },
  },
  data() {
    return {
      currentConditions: this.tag?.conditions ?? [],
    };
  },
  props: ["tag", "conditions"],
};
</script>
