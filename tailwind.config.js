module.exports = {
  purge: [
    './resources/**/*.vue',
    './resources/**/*.blade.php'
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
