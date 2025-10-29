<template>
    <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
        <bs-input-text ref="whatsapp_phone_number" title="WhatsApp Numarası" id="whatsapp_phone_number"
            name="whatsapp_phone_number"></bs-input-text>
        <bs-input-text ref="password" title="Şifre" id="p" name="p"></bs-input-text>
        <bs-button-solid :onclick="this.store" class="mt-2">
            Kaydet
        </bs-button-solid>
    </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
    methods: {
        store: async function () {
            await ApiRequest.post(
                this.$root.route("admin.customer.store"),
                {
                    meta: {},
                    password: this.$refs.password.value,
                    whatsapp_phone_number: this.$refs.whatsapp_phone_number.value,
                },
                this
            );
        },
    },
};
</script>