module.exports = {
  theme: {
    extend: {
      'colors' : {
        'teal-soft': '#F1FAFB',
        'teal-mid': '#78CDD1',
        'teal-hard': '#1296B0',
        'navy': '#182345',
        'purple': '#5E3F62',
        'purple-soft': '#BD8CBF',
        'soft-pink': '#FDFAFC',
      },
      spacing: {
        80: '20rem',
      },
      fontFamily: {
        'display': ['Archer-Bold', 'Georgia', 'Cambria', 'serif'],
        'sans': ['Lato', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
      },
      inset: {
        '16': '4rem',
      },
    },
  },
  variants: {
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
  },
  plugins: [],
}
