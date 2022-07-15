/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync([
    "../*.php",
    "../includes/*.php"
  ]),
  theme: {
    colors: {
      'darkblue': '#06113C',
      'orange': '#FF8C32', 
      'darkgray': '#DDDDDD',
      'softgray': '#EEEEEE',
      'error': '#EB4235',
      'warning': '#F5AE2D',
      'white': '#ffffff',
      'black': '#000000'
    },
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
      serif: ['Roboto Slab', 'serif']
    },
    extend: {},
  },
  plugins: [],
}
