const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            width: {
                '96': '24rem'
            },
        },
    },

    // plugins: [require('@tailwindcss/forms')],
};
