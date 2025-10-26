import "../../css/web/app.css";
import { createApp } from "vue";
import globals from "../globals";
import { i18nVue } from "laravel-vue-i18n";

const app = createApp();

app
  .use(globals)
  .use(i18nVue, {
    resolve: async (lang) => {
      const langs = import.meta.glob("../lang/*.json");
      return await langs[`../lang/${lang}.json`]();
    },
  })
  .mount("#app");
