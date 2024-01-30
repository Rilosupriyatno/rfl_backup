/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      maxWidth: {
        'invoice-screen': '80rem',
        'rattan-mobile': '48rem',
      },
      gridTemplateColumns: {
        'how-to-pay': '1fr auto',
      },
    },
    fontFamily: {
      poppins: ['Poppins', 'sans-serif'],
      roboto: ['Roboto', 'sans-serif'],
    },
  },
  plugins: [],
};
