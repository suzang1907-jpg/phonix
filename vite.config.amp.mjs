import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";
import i18n from "laravel-vue-i18n/vite";
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
  define: {
    // enable hydration mismatch details in production build
    __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: "true",
  },
  plugins: [
    vue({
      template: {
        transformAssetUrls: {
          base: null,
          includeAbsolute: false,
        },
      },
    }),
    tailwindcss(),
    laravel({
      input: ["resources/css/amp/app.css"],
      refresh: true,
      buildDirectory: "build/amp",
    }),
    i18n(),
  ],
  resolve: {
    alias: {
      "@": "/resources/",
      vue: "vue/dist/vue.esm-bundler.js",
    },
  },
  server: {
    port: 5174,
  },
});
