/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./resources/**/*.{html,js}', 
  './node_modules/tw-elements/dist/js/**/*.js', 
  "./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {
    extend: {},
  },
  plugins: [
    require('tw-elements/dist/plugin')
  ]
}