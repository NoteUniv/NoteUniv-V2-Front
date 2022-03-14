module.exports = {
  content: ["./src/**/*.js", "./views/**/*.php", "./index.php"],
  theme: {
    extend: {
      colors: {
        "nu-primary": "#110133",
        "nu-secondary": "#2F80ED",
        "nu-green": "#33DB92",
        "nu-orange": "orange",
        "nu-red": "#fe4c6a",
        "nu-gray": {
          100: "#F4F5F8",
          200: "#E6E6E6",
          300: "#C4C4C4",
          400: "#7A7A7A",
        },
      },
      boxShadow: {
        drop: "0 10px 30px 0 rgba(0, 0, 0, 0.1)",
      },
    },
  },
  plugins: [],
};
