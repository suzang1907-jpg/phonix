<template>
    <components-input-form>
        <bs-input-text class="max-w-none" :xvalue="this.workspace.dmca_script" ref="dmca_script" title="DMCA / Script"
            id="dmca_script" name="dmca_script"></bs-input-text>

        <bs-input-select :xvalue="this.workspace.meta?.dynamic_keywords ? 'enabled' : 'disabled'"
            ref="meta_dynamic_keywords" title="Dynamic Keywords" id="meta_dynamic_keywords"
            name="meta_dynamic_keywords">
            <bs-input-select-option value="enabled">Enabled</bs-input-select-option>
            <bs-input-select-option value="disabled">Disabled</bs-input-select-option>
        </bs-input-select>


        <bs-button-solid @onclick="this.submit"> Save workspace </bs-button-solid>
    </components-input-form>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
    methods: {
        submit: async function () {
            const response = await ApiRequest.post(
                this.$root.route("admin.workspace.update"),
                {
                    dmca_script: this.$refs.dmca_script.value,
                    meta: {
                        dynamic_keywords: this.$refs.meta_dynamic_keywords.value == 'enabled' ? true : false,
                    }
                },
                this
            );

            if (!response.ok()) {
                return;
            }

            window.location.reload();
        },
    },
    props: ["workspace"],
};
</script>