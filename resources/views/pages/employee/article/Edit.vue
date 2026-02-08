<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full px-6">
   
    <components-datepicker :xvalue="article.meta?.renew_at?.date" ref="renew_at_date"
       title="Yenileme saati" />
    <bs-input-text :xvalue="article.meta?.renew_at?.time" ref="renew_at_time" title="Yenileme tarihi" id="renew_at_time"
      name="renew_at_time"></bs-input-text>
<components-employee-customer-search :xvalue="this.customer" ref="customer"></components-employee-customer-search>
    <bs-input-text :xvalue="article.title" ref="title" title="İsim" required id="title" name="title"></bs-input-text>
    <bs-input-text :xvalue="article.description" ref="description" title="Açıklama" required id="description"
      name="description"></bs-input-text>
    <div class="collapse border border-border">
      <input type="checkbox" />
      <div class="collapse-title font-medium">Ana resimi düzenle</div>
      <div class="collapse-content">
        <components-input-image :placeholder="this.$root.route('file.article.main.image', { id: this.article.id }) + '?v=' + this.article.image_id
          " ref="main_image" id="main_image" name="main_image" title="Ana resim" required></components-input-image>
      </div>
    </div>
    <div class="collapse border border-border">
      <input type="checkbox" />
      <div class="collapse-title font-medium">Resimleri düzenle</div>
      <div class="collapse-content">
        <components-input-images :placeholder="this.article.images?.map((image) => {
          return this.$root.route('file.article.image', {
            id: this.article.id,
            image_id: image,
          });
        })
          " ref="images" id="images" name="images" title="Resimler"></components-input-images>
      </div>
    </div>
    <bs-input-text :xvalue="article.info" ref="info" title="Info" required id="info" name="info"></bs-input-text>
    <bs-input-text :xvalue="article.phone_number" ref="phone_number" title="Telefon Numara" id="phone_number"
      name="phone_number"></bs-input-text>
    <bs-input-text :xvalue="article.whatsapp_number" ref="whatsapp_number" title="WhatsApp Numara" id="whatsapp_number"
      name="whatsapp_number"></bs-input-text>
    <bs-input-text :xvalue="article.whatsapp_message" ref="whatsapp_message" title="WhatsApp Mesaj"
      id="whatsapp_message" name="whatsapp_message"></bs-input-text>
    
    <bs-button-solid :onclick="this.update" class="mt-2">
      İlanı kaydet
    </bs-button-solid>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";
import Chart from 'chart.js/auto';

export default {
  props: ["article", "customer"],
  mounted() {
    const currentDate = new Date();
    const date = new Date();
    function createDateFromRaw(value) {
      if (!value) {
        return null;
      }
      return new Date(value);
    }
    const data = {
      labels: [
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[0] ?? [])['date']) ?? currentDate.getDate()))).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[1] ?? [])['date']) ?? currentDate.getDate()) - 1)).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[2] ?? [])['date']) ?? currentDate.getDate()) - 2)).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[3] ?? [])['date']) ?? currentDate.getDate()) - 3)).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[4] ?? [])['date']) ?? currentDate.getDate()) - 4)).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[5] ?? [])['date']) ?? currentDate.getDate()) - 5)).toLocaleDateString('tr-TR'),
        new Date(date.setDate(((createDateFromRaw(this.$props.article?.analytics[6] ?? [])['date']) ?? currentDate.getDate()) - 6)).toLocaleDateString('tr-TR')
      ].reverse(),
      datasets: [
        {
          label: "Görüntüleme",
          data: [
            (this.$props.article?.analytics[0] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[1] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[2] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[3] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[4] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[5] ?? [])['view_count'] ?? 0,
            (this.$props.article?.analytics[6] ?? [])['view_count'] ?? 0,
          ].reverse()
        },
        /**  {
          label: "Çağrı",
          data: [
            (this.$props.article?.analytics[0] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[1] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[2] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[3] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[4] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[5] ?? [])['phone_click_count'] ?? 0,
            (this.$props.article?.analytics[6] ?? [])['phone_click_count'] ?? 0,
          ].reverse()
        },
        {
          label: "Mesaj",
          data: [
            (this.$props.article?.analytics[0] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[1] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[2] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[3] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[4] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[5] ?? [])['whatsapp_click_count'] ?? 0,
            (this.$props.article?.analytics[6] ?? [])['whatsapp_click_count'] ?? 0,
          ].reverse()
        }*/
      ]
    }

    const config = {
      type: 'bar',
      data: data,
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: false,
            text: 'İstatistikler'
          }
        }
      },
    };

   
  },
  methods: {
    update: async function () {
      await ApiRequest.post(
        this.$root.route("employee.article.update", {
          id: this.article.id,
        }),
        {
          meta: {
      
            renew_at: {
              date: this.$refs.renew_at_date.value,
              time: this.$refs.renew_at_time.value
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
