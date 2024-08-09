import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        container: {
            center: true,
            padding: '2rem',
        },
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'royal-blue': '#2405F2',
                'tint-blue': '#1C1E53',
                'dark-blue': '#282938',
                'yellow': '#FCD980',
                'grey': '#F4F6FC',
                'light-grey': '#bbbbcb',
                'accent': '#EEF4FA',
                'black': '#000000',
                'white': '#FFFFFF',
                'transparent': 'transparent',
                'current': 'currentColor',
            },
        },
    },

    plugins: [forms],
};
