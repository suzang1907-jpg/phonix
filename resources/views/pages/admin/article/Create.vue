<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <components-date-picker ref="renew_at_date" title="Renew at date" />
    <bs-input-text ref="renew_at_time" title="Renew at time" id="renew_at_time" name="renew_at_time"></bs-input-text>
 
    <bs-input-text ref="title" title="Title" required id="title" name="title"></bs-input-text>
    <bs-input-text ref="description" title="Description" required id="description" name="description"></bs-input-text>
    <bs-input-image ref="main_image" id="main_image" name="main_image" title="Main Image" required></bs-input-image>
    <bs-input-images ref="images" id="images" name="images" title="Images"></bs-input-images>
    <bs-input-text ref="info" title="Info" required id="info" name="info"></bs-input-text>
    <bs-input-text ref="phone_number" title="Phone Number" id="phone_number" name="phone_number"></bs-input-text>
    <bs-input-text ref="whatsapp_number" title="WhatsApp Number" id="whatsapp_number"
      name="whatsapp_number"></bs-input-text>
    <bs-input-text ref="whatsapp_message" title="WhatsApp Message" id="whatsapp_message"
      name="whatsapp_message"></bs-input-text>
    
    <components-admin-customer-search :xvalue="this.customer"  ref="customer"></components-admin-customer-search>
    <bs-button-solid :onclick="this.store" class="mt-2">
      Create
    </bs-button-solid>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
props: ['customer'],
  methods: {
    store: async function () {
      await ApiRequest.post(
        this.$root.route("admin.article.store"),
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
