const mix = require('laravel-mix');

mix.setPublicPath('public/vendor/route-list');

mix.js('resources/js/app.js', 'js');
mix.js('resources/js/script.js', 'js');
mix.sass('resources/sass/app.scss', 'css');

mix.sourceMaps();

mix.version();
