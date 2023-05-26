/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        heebo: ['Heebo']
      },
      colors: {
        tegal: ['#6096B4']
      }
    },
  },
  plugins: [],
}

