<template>
  <components-input-form>
    <components-input-text
      ref="tag"
      title="Tag"
      id="tag"
      :xvalue="this.tag.tag"
      :required="true"
    ></components-input-text>
    <components-admin-tag-conditions
      ref="conditions"
      :tag="this.tag"
      :conditions="this.conditions"
    ></components-admin-tag-conditions>

    <div>
      <components-button-primary
        type="button"
        v-on:click="this.submit()"
        class="w-full mt-2"
        >Save tag</components-button-primary
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
        "/admin/tag/" + this.tag.id + "/update",
        {
          tag: dataTag,
          conditions: JSON.stringify(dataConditions),
          id: this.tag.id,
        },
        this
      );
    },
  },
  props: ["tag", "conditions"],
};
</script>
