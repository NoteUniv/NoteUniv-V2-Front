module.exports = {
  content: ["./src/**/*.js", "./views/**/*.php", "./index.php"],
  theme: {
    extend: {
      colors: {
        nuPrimary: "#110133",
        nuSecondary: "#2F80ED",
        nuGreen: "#33DB92",
        nuOrange: "orange",
        nuRed: "#fe4c6a",
        nuGray: {
          100: "#F8F9FB",
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
