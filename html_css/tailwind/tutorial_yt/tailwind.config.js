/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
    // 利用したいimageを以下のように追記
    backgroundImage: {
      "tutorial-bg" : "url('../src/img/main-bg.jpg')",
    },
  },
  plugins: [],
}
