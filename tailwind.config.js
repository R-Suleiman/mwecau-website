/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./public/**/*.js",
    ],
    theme: {
      extend: {
        height: {
            'phil-height': '30rem', // Custom height utility
          },
      }
    },
    plugins: [],
  }
