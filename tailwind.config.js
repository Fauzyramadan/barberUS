/** @type {import('tailwindcss').Config} */
export default {
  content: [],
  theme: {
    extend: {
      colors: {
      'us-100': '#3A3132',
      'us-200': '#f2edd7',
      'us-300':'#f2cf30',
    },
    },
  },
  plugins: [require('@tailwindcss/forms'),],
}

