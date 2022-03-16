module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins', 'sans-serif'],
      },
      colors: {
        yellow: {
          DEFAULT: "#e9c46a",
        }
      },
      fontSize: {
                xs: ".75rem",
                sm: ".875rem",
                tiny: ".875rem",
                base: "1rem",
                lg: "1.333rem",
                xl: "1.777rem",
                "2xl": "2.369rem",
                "3xl": "3.157rem",
                "4xl": "4.209rem",
                "5xl": "5.332rem",
                "6xl": "6.665rem",
                "7xl": "7.998rem",
            },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
