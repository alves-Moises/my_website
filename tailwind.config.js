import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Arial", ...defaultTheme.fontFamily.sans],
            },
            screens: {
                xxsm: "420px",
                md: "768px",
                lg: "1024px",
                xlg: "1366px",
                xxlg: "1920px",
            },
            colors: {
                "custom-dark": {
                    900: "#131415",
                },
                "night-coal": {
                    900: "#18181C",
                    800: "#222228",
                },
                "primary": "#c20f29",
                "primary-gradient":
                    "linear-gradient(92.51deg, #FF9898 0.48%, #AE051F 100%)",
            },
        },
    },

    plugins: [forms],
};
