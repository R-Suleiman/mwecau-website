/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/errors/*.blade.php",
        './resources/views/admin/**/*.blade.php', // Tailwind will only apply to admin layouts
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/**/*.js",
    ],
    theme: {
        extend: {
            height: {
                'phil-height': '30rem', // Custom height utility
            },
            colors: {
                'gradient-start': 'rgb(4, 4, 70)',
                'gradient-end': 'rgb(16, 16, 136)',
                'default-text': 'rgb(107 114 128)',
                'default-head': 'rgb(30, 64, 175)',
            },
            borderRadius: {
                'img-border': '200px',
            },
            backgroundImage: {
                'news-bg': "url('/img/campus-life/spirtual2.jp')",
            },
            rotate: {
                '10': '10deg',
                '15': '-15deg'
            },
        }
    },
    plugins: [],
}
