module.exports = {
  content: ["./src/**/*.js", "./views/**/*.php"],
  theme: {
    extend: {
      colors: {
        'primary': '#110133',
        'secondary': '#2F80ED',
        'third': '#F8F9FB'
      },
      boxShadow: {
        'drop': '0 10px 30px 0 rgba(0, 0, 0, 0.1)',
      }
    },
  },
  plugins: [],
};
