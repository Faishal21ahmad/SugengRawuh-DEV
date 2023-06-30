/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
  // ubah media menjadi class ketika menggunakan linux
  darkMode: 'class',
  content: [
     "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      // <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      fontFamily: {
        "roboto" : ['Roboto'],
      },
      screens: {
        "mn" : "30px",
      },
      colors: {
        "Green-old": "#206A5D",
        "very-Green-old": "#133d35",
        "Yellow": "#FFCC29",
        "Brown": "#F58634",
        "Brown-old": "#ED5107",
      
      },
      
    },
  },
  plugins: [
    
      require('flowbite/plugin')


  ],
}
