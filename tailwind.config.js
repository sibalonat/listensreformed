const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                GB: ["GB", "sans-serif"],
                GBook: ["GBook", "sans-serif"],
                GM: ["GM", "sans-serif"],
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gblue: "#480094",
                gpurple: "#343090",
            },
            fontSize: {
                '28xl': '3.6rem'
            },
            width: {
                '68': '68%'
            }

            // #48009400
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
