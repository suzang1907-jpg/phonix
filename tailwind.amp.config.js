/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/components/**/*.blade.php",
    "./resources/views/pages/amp/**/*.blade.php",
    "./resources/views/components/**/*.js",
    "./resources/views/pages/amp/**/*.js",
    "./resources/views/components/**/*.vue",
    "./resources/views/pages/amp/**/*.vue",
  ],
  theme: {
    extend: {
      borderWidth: {
        basewidth: "1px",
      },
      colors: {
        neutral: "#000",
        invert: "#fff",
        background: "#000",
        input: "#111111",
        error: "#ef4444",
        border: "#111111",
        primary: {
          text: "#ffffff",
          100: "#cffafe",
          200: "#a5f3fc",
          300: "#67e8f9",
          400: "#22d3ee",
          500: "#06b6d4",
          600: "#0891b2",
          700: "#0e7490",
          800: "#155e75",
          900: "#164e63",
        },
        secondary: {
          text: "#ffffff",
          100: "#fce7f3",
          200: "#fbcfe8",
          300: "#f9a8d4",
          400: "#f472b6",
          500: "#ec4899",
          600: "#db2777",
          700: "#be185d",
          800: "#9d174d",
          900: "#831843",
        },
      },
    },
  },
  plugins: [],
};
