/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'gray42': '#6B6B6B',
      },

      backgroundColor: {
        'gray1': 'rgba(0, 0, 0, 0.1)'

      }
    },
  },
  plugins: [],
}

