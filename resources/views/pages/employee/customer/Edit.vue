<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full px-6">
    <bs-input-text :xvalue="customer.whatsapp_phone_number" ref="whatsapp_phone_number" title="WhatsApp Numara"
      id="whatsapp_phone_number" name="whatsapp_phone_number"></bs-input-text>
    <bs-input-text ref="password" title="Şifre" id="p" name="p"></bs-input-text>

    <bs-button-solid :onclick="this.update" class="mt-2">
      Müşteriyi kaydet
    </bs-button-solid>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  props: ["customer"],
  methods: {
    update: async function () {
      await ApiRequest.post(
        this.$root.route("employee.customer.update", {
          id: this.customer.id,
        }),
        {
          meta: {
          },
          password: this.$refs.password.value,
          whatsapp_phone_number: this.$refs.whatsapp_phone_number.value,
        },
        this
      );
    },
  },
};
</script>
