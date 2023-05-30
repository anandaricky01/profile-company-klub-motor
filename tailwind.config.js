module.exports = {
    // untuk dark mode
    darkMode: 'class',

    // lokasi resource
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {},
    },

    // plugin yang digunakan
    plugins: [
        require('flowbite/plugin')
    ],
  }
