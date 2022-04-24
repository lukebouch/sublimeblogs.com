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
        'serif': ['Halant', 'serif'],
      },
      colors: {
        yellow: {
          DEFAULT: '#E9C46A'
        },
        primary: {
          DEFAULT: '#E9C46A',
          50: '#FCF6E9',
          100: '#F5E5BC',
          200: '#EFD390',
          300: '#E8C163',
          400: '#E1B037',
          500: '#E9C46A',
          600: '#E4BA4E',
          700: '#DFAC2A',
          800: '#BF9222',
          900: '#9A771D',
        },
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
