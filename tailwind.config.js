// tailwind.config.js
export default {
  content: ["./**/*.{php,html,js}", "./node_modules/daisyui/**/*.{js,ts}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
};
