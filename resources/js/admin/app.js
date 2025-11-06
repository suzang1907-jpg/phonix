import "../../css/admin/app.css";
import { createApp } from "vue";
import globals from "../globals-admin";
import fortawesome from "./fortawesome";
import { i18nVue } from "laravel-vue-i18n";
import routes from "../routes";
window.Buffer = window.Buffer || Buffer;

const app = createApp({
  data() {
    return {
      alerts: [],
      loadingOverlay: document.getElementById("loading-overlay"),
    };
  },

  methods: {
    route: function (name, parameters = null) {
      let route = routes[name];

      for (let parameter in parameters) {
        route = route.replace("{" + parameter + "}", parameters[parameter]);
      }

      return route;
    },
    addAlert: function (alert) {
      this.alerts.push({
        title: alert.title,
        text: alert.text,
        type: alert.type,
      });
    },
    removeAlert: function (index) {
      this.alerts.splice(index, 1);
    },
    loadingOverlayHide: function () {
      if (!this.loadingOverlay) {
        this.loadingOverlay = document.getElementById("loading-overlay");
      }

      if (!this.loadingOverlay) {
        return;
      }

      this.loadingOverlay.classList.add("loading-overlay-hidden");
    },
    loadingOverlayShow: function () {
      if (!this.loadingOverlay) {
        this.loadingOverlay = document.getElementById("loading-overlay");
      }

      if (!this.loadingOverlay) {
        return;
      }

      this.loadingOverlay.classList.remove("loading-overlay-hidden");
    },
  },

  mounted() {
    setTimeout(() => {
      this.loadingOverlayHide();
    }, 200);
  },
});

app
  .use(globals)
  .use(fortawesome)
  .use(i18nVue, {
    resolve: async (lang) => {
      const langs = import.meta.glob("../../lang/*.json");
      return await langs[`../../lang/${lang}.json`]();
    },
  })
  .mount("#app");
