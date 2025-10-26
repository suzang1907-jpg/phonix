/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/components/**/*.blade.php",
    "./resources/views/pages/employee/**/*.blade.php",
    "./resources/views/components/**/*.js",
    "./resources/views/pages/employee/**/*.js",
    "./resources/views/components/**/*.vue",
    "./resources/views/pages/employee/**/*.vue",
    "./resources/js/services/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    extend: {
      colors: {
        border: "#EEEEEE",
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["corporate"],
  },
};
