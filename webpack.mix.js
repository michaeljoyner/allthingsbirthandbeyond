let mix = require('laravel-mix');
let tailwindcss = require("tailwindcss");
require('laravel-mix-purgecss');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/front.js', 'public/js')
   .less('resources/assets/less/app.less', 'public/css')
    .less('resources/assets/less/front.less', 'public/css')
   .options({
       postCss: [
           tailwindcss('./tailwind.config.js'),
       ]
   })
   .purgeCss()
    .version();
