/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    
  ],
  theme: {
    extend: {},
    fontFamily:{
      'roboto':["Robot"]
      
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
