const mix = require('laravel-mix');

// for Tailwind: https://github.com/JeffreyWay/laravel-mix-tailwind
require('laravel-mix-tailwind');

// for PurgeCSS
require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    // .less('resources/less/app.less', 'public/css')
    .tailwind()
    .purgeCss({
        enabled: mix.inProduction(),
        folders: ['src', 'templates'],
        extensions: ['twig', 'html', 'js', 'php', 'vue'],
    })
    .setPublicPath('public');
