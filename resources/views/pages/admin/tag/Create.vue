<template>
  <components-input-form>
    <components-input-text
      ref="tag"
      title="Tag"
      id="tag"
      :required="true"
    ></components-input-text>
    <components-admin-tag-conditions
      ref="conditions"
      :conditions="this.conditions"
    ></components-admin-tag-conditions>

    <div>
      <components-button-primary
        type="button"
        v-on:click="this.submit()"
        class="w-full mt-2"
        >Create tag</components-button-primary
      >
    </div>
  </components-input-form>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    submit: async function () {
      const dataTag = this.$refs.tag.value;
      this.$refs.conditions.save();
      const dataConditions = this.$refs.conditions.currentConditions;

      await ApiRequest.post(
        "/admin/tag/store",
        {
          tag: dataTag,
          conditions: JSON.stringify(dataConditions),
        },
        this
      );
    },
  },
  props: ["tag", "conditions"],
};
</script>
