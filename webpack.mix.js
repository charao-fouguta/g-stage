const mix = require('laravel-mix');

require('laravel-mix-polyfill');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/admin/app.js', 'public/js/admin')
    .js('resources/js/admin/sb-admin-2.js', 'public/js/admin')
    .sass('resources/scss/admin/app.scss', 'public/css/admin')
    .vue()   
    .polyfill({
        enabled: true,
        useBuiltIns: "usage",
        targets: "firefox 50, IE 11"
     });

    //.js('resources/js/app.js', 'public/js')
    //.postCss('resources/css/app.css', 'public/css', [
        //
    //]);

if (mix.inProduction()) {
    mix.version();
}