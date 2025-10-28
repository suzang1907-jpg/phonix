<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <div class="w-full">
      <canvas ref="chart" class="w-full" id="chart"></canvas>
    </div>
    <div v-if="article.meta?.renew_at" :class="this.getDateClass()">
      <div class="font-bold">İlanınız aşağıdaki tarihe kadar aktiftir</div>
      <div class="text-sm" v-if="this.getDate()"><span>Tarih: </span><span class="font-bold">{{ this.getDate() }}</span>
      </div>
      <div class="text-sm" v-if="article.meta?.renew_at.time"><span>Saat: </span><span class="font-bold">{{
        article.meta?.renew_at.time
          }}</span></div>
      <div class="text-sm"><span class="font-bold">İlan Referans: </span>{{ article.id }}</div>
      <div v-if="article.meta?.price" class="flex flex-col mt-2">
        <div class="text-sm font-bold">Ödeme bilgileri</div>
        <div class="flex flex-col mt-1">
          <div class="text-sm"><span>Fiyat: </span><span class="font-bold">{{ article.meta?.price }}TRY</span></div>
          <div v-if="article.meta?.trc20_wallet" class="text-sm">
            <div><span>Adres: </span><span class="font-bold">{{ article.meta?.trc20_wallet }}</span></div>
            <div><span>Kripto para birimi: </span><span class="font-bold">TRX - TRC-20</span></div>
          </div>
        </div>
        <div class="text-xs mt-1">Ödemenizden sonra lütfen ödeme kanıtını destek ekibimize gönderin.</div>
      </div>
    </div>
    <bs-input-text :xvalue="article.title" ref="title" title="Başlık" required id="title" name="title"></bs-input-text>
    <bs-input-text :xvalue="article.description" ref="description" title="Tanım" required id="description"
      name="description"></bs-input-text>
    <div class="text-xl font-bold">PNG veya JPEG / Herangi bir hata olursa lütfen başka resim ile deneyin!</div>
    <components-input-image :placeholder="this.$root.route('file.article.main.image', { id: this.article.id }) + '?v=' + this.article.image_id
      " ref="main_image" accept="image/png, image/jpeg" id="main_image" name="main_image" title="Ana resim"
      required></components-input-image>
    <components-input-images accept="image/png, image/jpeg" :placeholder="this.article.images?.map((image) => {
      return this.$root.route('file.article.image', {
        id: this.article.id,
        image_id: image,
      });
    })
      " ref="images" id="images" name="images" title="Resimler"></components-input-images>
    <bs-input-text :xvalue="article.info" ref="info" title="Bilgi" required id="info" name="info"></bs-input-text>
    <bs-input-text :xvalue="article.telegram" ref="telegram" title="Telegram ID" id="telegram"
      name="telegram"></bs-input-text>
    <bs-input-text :xvalue="article.phone_number" ref="phone_number" title="Telefon numarası" id="phone_number"
      name="phone_number"></bs-input-text>
    <bs-input-text :xvalue="article.whatsapp_number" ref="whatsapp_number" title="WhatsApp numarası"
      id="whatsapp_number" name="whatsapp_number"></bs-input-text>
    <bs-input-text :xvalue="this.article_whatsapp_message" ref="whatsapp_message" title="WhatsApp Mesajı"
      id="whatsapp_message" name="whatsapp_message"></bs-input-text>
    <div class="text-sm mb-2">
      <p class="font-bold">Otomatik konum tespiti</p>
      <p><span>Merhaba, </span><span class="text-orange-700 font-bold">(Konum)</span><span> sitesinden yazıyorum</span>
      </p>
      <p><span>Merhaba, </span><span class="text-orange-700 font-bold">Ankara</span><span> sitesinden yazıyorum</span>
      </p>
      <p><span>Merhaba, </span><span class="text-orange-700 font-bold">Esenler</span><span> sitesinden yazıyorum</span>
      </p>
    </div>

    <bs-button-solid :onclick="this.update" class="mt-2">
      Kaydet
    </bs-button-solid>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";
import Chart from 'chart.js/auto';

export default {
  props: ["article"],
  data() {
    var whatsapp_message = this.$props.article.whatsapp_message;

    if (whatsapp_message) {
      whatsapp_message = whatsapp_message.replace('[/location/]', '(Konum)');
    }

    return {
      article_whatsapp_message: whatsapp_message
    };
  },
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
          label: "Günlük Görüntüleme",
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

    const chart = new Chart(document.getElementById('chart'), config);
  },
  methods: {
    getDate: function () {
      var date = this.article.meta?.renew_at?.date;
      if (!date) {
        return null;
      }

      date = new Date(date);

      const day = date.getDate();
      const month = date.getMonth();
      const year = date.getFullYear();

      return day + "." + (month + 1) + "." + year;
    },
    getDateClass: function () {
      var date = this.article.meta?.renew_at?.date;

      if (!date) {
        return "bg-success text-success-content p-2 rounded";
      }

      date = new Date(date);
      const currentDate = new Date();

      const day = date.getDate();
      const month = date.getMonth();
      const year = date.getFullYear();

      const currentDay = currentDate.getDate();
      const currentMonth = currentDate.getMonth();
      const currentYear = currentDate.getFullYear();

      const diffDay = day - currentDay;
      const diffMonth = month - currentMonth;
      const diffYear = year - currentYear;

      if (diffDay == 0 && diffMonth == 0 && diffYear == 0) {
        return 'bg-error text-error-content p-2 rounded';
      }

      if (diffDay == 1 && diffMonth == 0 && diffYear == 0) {
        return "bg-warning text-warning-content p-2 rounded";
      }

      return "bg-success text-success-content text-black p-2 rounded";
    },
    update: async function () {
      const response = await ApiRequest.post(
        this.$root.route("customer.article.update", { id: this.$props.article.id }),
        {
          title: this.$refs.title.value,
          description: this.$refs.description.value,
          main_image: this.$refs.main_image.value,
          images: this.$refs.images.value,
          info: this.$refs.info.value,
          telegram: this.$refs.telegram.value,
          phone_number: this.$refs.phone_number.value,
          whatsapp_number: this.$refs.whatsapp_number.value,
          whatsapp_message: this.$refs.whatsapp_message.value,
        },
        this,
        {
          hideLoadingOverlay: false,
          showLoadingOverlay: true,
          showAlert: false,
        }
      );

      if (!response.ok()) {
        this.$root.loadingOverlayHide();

        var text = 'Bir hata oluştu';

        try {
          const message = await response.getData('message');

          if (message) {
            if (message == 'phone_number_must_start_with_plus') {
              text = 'Telefon numarası artı ile başlamalıdır'
            }

            if (message == 'whatsapp_number_must_start_with_plus') {
              text = 'WhatsApp numarası artı ile başlamalıdır'
            }
          }
        } catch (e) {
        }

        this.$root.addAlert({
          'type': 'error',
          'title': 'Hata',
          'text': text
        });

        return;
      }
    },
  },
};
</script>
