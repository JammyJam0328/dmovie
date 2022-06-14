const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
                cabin: ['Cabin', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'background': '#deeeec',
                'highlights': '#3c8b84',
            },
            backgroundImage: {
                mainback: "url('/images/bg.svg')",
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};