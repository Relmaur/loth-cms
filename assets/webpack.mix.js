let mix = require('laravel-mix');

mix.js('src/js/index.js', 'dist/js').postCss('src/css/index.css', 'dist/css', [
    require("tailwindcss"),
])