/** @type {import('tailwindcss').Config} */
export default {
    purge: [
        "./resources/views/welcome.blade.php",
        "./resources/**/*.{vue,js,ts,jsx,tsx}",
    ],
    content: [],
    theme: {
        extend: {},
    },
    plugins: [],
};
