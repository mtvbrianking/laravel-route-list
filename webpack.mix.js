const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js').sourceMaps()
    // .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/dt_script.js', 'public/js');
