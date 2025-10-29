<template>
    <components-input-form>
        <bs-input-text class="max-w-none" ref="workspace_name" title="Name" id="workspace_name"
            name="workspace_name"></bs-input-text>

        <bs-input-select :xvalue="'disabled'" ref="meta_dynamic_keywords" title="Dynamic Keywords"
            id="meta_dynamic_keywords" name="meta_dynamic_keywords">
            <bs-input-select-option value="enabled">Enabled</bs-input-select-option>
            <bs-input-select-option value="disabled">Disabled</bs-input-select-option>
        </bs-input-select>


        <bs-button-solid @onclick="this.submit">Create workspace</bs-button-solid>
    </components-input-form>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
    methods: {
        submit: async function () {
            const response = await ApiRequest.post(
                this.$root.route("admin.workspace.store"),
                {
                    workspace_project_id: this.project.id,
                    workspace_name: this.$refs.workspace_name.value,
                    meta: {
                        dynamic_keywords: this.$refs.meta_dynamic_keywords.value == 'enabled' ? true : false,
                    }
                },
                this
            );

            if (!response.ok()) {
                return;
            }
        },
    },
    props: ["project"],
};
</script>