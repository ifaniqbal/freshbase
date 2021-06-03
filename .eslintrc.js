module.exports = {
  extends: [
    'plugin:vue/vue3-recommended',
  ],
  rules: {
    "indent": ["error", 2],
    "vue/script-indent": ["error", 2, { "baseIndent": 0 }],
    "vue/html-closing-bracket-newline": ["error", {
      "singleline": "never",
      "multiline": "never"
    }],
    "vue/no-v-html": "off",
    "vue/require-prop-types": "off",
    "vue/require-default-prop": "off",
    "vue/component-tags-order": "off",
    "vue/no-arrow-functions-in-watch": "off",
    "vue/require-v-for-key": "off",
  }
}