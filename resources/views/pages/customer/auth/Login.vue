<template>
  <div class="flex flex-col gap-4 max-w-xl mx-auto w-full">
    <bs-input-text :xvalue="password" type="password" ref="customer_password" title="Şifre" id="customer_password"
      name="customer_password"></bs-input-text>

    <div class="text-sm">
      <p>Şifrenizi unuttuysanız lütfen destek ekibimizle iletişime geçin
      </p>
    </div>

    <button v-on:click="this.login" class="btn btn-primary w-full mt-2">
      Giriş Yap
    </button>
  </div>
</template>
<script>
import ApiRequest from "../../../../js/utils/api/ApiRequest";

export default {
  props: ["password", "ci"],
  methods: {
    login: async function () {
      const response = await ApiRequest.post(
        this.$root.route("customer.auth.login.post"),
        {
          ci: this.ci,
          cp: this.$refs.customer_password.value,
        },
        this,
        {
          hideLoadingOverlay: false,
          showLoadingOverlay: true,
          showAlert: false,
        }
      );

      if (!response || !response.ok()) {
        this.$root.addAlert({
          title: "Hata!",
          text: "Hatalı Giriş",
          type: "error",
        });

        this.$root.loadingOverlayHide();

        return;
      }

      window.location.reload();
    },
  },
};
</script>
