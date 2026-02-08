<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <components-date-picker ref="renew_at_date" title="Yenileme saati" />
    <bs-input-text ref="renew_at_time" title="Yenileme tarihi" id="renew_at_time" name="renew_at_time"></bs-input-text>
 
    <bs-input-text ref="title" title="İsim" required id="title" name="title"></bs-input-text>
    <bs-input-text ref="description" title="Açıklama" required id="description" name="description"></bs-input-text>
    <bs-input-image ref="main_image" id="main_image" name="main_image" title="Ana resim" required></bs-input-image>
    <bs-input-images ref="images" id="images" name="images" title="Resimler"></bs-input-images>
    <bs-input-text ref="info" title="Info" required id="info" name="info"></bs-input-text>
    <bs-input-text ref="phone_number" title="Telefon Numara" id="phone_number" name="phone_number"></bs-input-text>
    <bs-input-text ref="whatsapp_number" title="WhatsApp Numara" id="whatsapp_number"
      name="whatsapp_number"></bs-input-text>
    <bs-input-text ref="whatsapp_message" title="WhatsApp Mesaj" id="whatsapp_message"
      name="whatsapp_message"></bs-input-text>
    
    <components-employee-customer-search ref="customer"></components-employee-customer-search>
    <bs-button-solid :onclick="this.store" class="mt-2">
      İlanı oluştur
    </bs-button-solid>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  methods: {
    store: async function () {
      await ApiRequest.post(
        this.$root.route("employee.article.store"),
        {
          meta: {
            renew_at: {
          
              date: this.$refs.renew_at_date.value,
              time: this.$refs.renew_at_time.value,
          
                       },
          },
          title: this.$refs.title.value,
          description: this.$refs.description.value,
          main_image: this.$refs.main_image.value,
          images: this.$refs.images.value,
          info: this.$refs.info.value,
          phone_number: this.$refs.phone_number.value,
          whatsapp_number: this.$refs.whatsapp_number.value,
          whatsapp_message: this.$refs.whatsapp_message.value,
           customer: this.$refs.customer?.value?.id
        },
        this
      );
    },
  },
};
</script>
