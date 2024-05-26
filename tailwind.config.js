/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./views/admins/*.{html, php}",
    "./views/users/*.{html, php}",
    "./views/users/parts/*.php",
    "./views/*.{html, php}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
