let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/style.scss', 'public/css')
    .scripts([
        'resources/js/vanilla/plugins/plugins.js',
        'resources/js/vanilla/app.js',
    ], 'public/js/all.js')
    .version().sourceMaps();
