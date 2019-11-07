const mix = require('laravel-mix');

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
mix.styles([
    'public/assets/css/animate.css',
    'public/assets/css/ionicons.min.css',
    'public/assets/css/bootstrap-datepicker.css',
    'public/assets/css/jquery.timepicker.css',
    'public/assets/css/style.css',
    'public/assets/css/style.rtl.css',
    'public/assets/css/icon.rtl.css',
],'public/css/style.css').version();


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
