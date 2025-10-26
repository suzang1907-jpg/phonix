<template>
  <div
    v-if="isOpen"
    class="fixed bottom-6 left-6 z-40 flex flex-row items-center justify-start"
  >
    <div
      class="px-3 py-2 bg-background flex flex-col shadow-xl border border-border max-w-xs"
    >
      <h2 class="font-bold">Cookies</h2>
      <p class="text-sm">
        We'd like to certain analytics cookies to help us to improve our website
        by collecting and reporting information on how you use it. For more
        information please see our <a href="/policy/cookies" class="text-fuchsia-600">'Cookies page'</a>. Are you happy to allow
        cookies?
      </p>
      <div class="mt-2 flex flex-row items-center justify-evenly">
        <components-button-secondary class="w-full" :click="decline" size="md">
          Decline
        </components-button-secondary>
        <components-button-primary class="ml-4 w-full" :click="accept" size="md">
          Accept
        </components-button-primary>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    const cookiesAccepted =
      window.localStorage.getItem("cookies-state") == "granted";

    return {
      isOpen: !cookiesAccepted,
    };
  },
  methods: {
    accept: function () {
      try {
        gtag("consent", "update", {
          ad_storage: "granted",
          ad_user_data: "granted",
          ad_personalization: "granted",
          analytics_storage: "granted",
        });

        gtag("set", "ads_data_redaction", false);
      } catch (e) {
        console.log(e);
      }

      window.localStorage.setItem("cookies-state", "granted");
      this.isOpen = false;
    },
    decline: function () {
      try {
        gtag("consent", "update", {
          ad_storage: "declined",
          ad_user_data: "declined",
          ad_personalization: "declined",
          analytics_storage: "declined",
        });

        gtag("set", "ads_data_redaction", true);
      } catch (e) {
        console.log(e);
      }
      window.localStorage.setItem("cookies-state", "declined");
      this.isOpen = false;
    },
  },
};
</script>
