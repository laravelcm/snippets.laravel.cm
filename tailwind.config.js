const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: ['./resources/**/*.blade.php', './resources/**/*.js'],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        flag: {
          green: '#099170',
          red: '#e21b30',
          yellow: '#ffdc44',
        },
        dark: '#0D1117',
        'dark-muted': '#161B22',
        'laravel-io': '#18bc9c',
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.mono],
        mono: ['Operator Mono', ...defaultTheme.fontFamily.sans],
      },
      screens: {
        print: { raw: 'print' },
      },
    },
  },
  variants: {
    extend: {
      display: ['dark'],
      translate: ['dark']
    },
  },
  plugins: [],
}
