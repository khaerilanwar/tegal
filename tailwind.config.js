/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php'
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        heebo: ['Heebo'],
        pacifico: ['Pacifico']
      },
      colors: {
        tegal: ['#6096B4']
      }
    },
  },
  plugins: [],
}

