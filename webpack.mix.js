const mix = require('laravel-mix');

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

mix
.scripts('node_modules/jquery/dist/jquery.js', 'public/Assets/js/jquery.js')
.scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/Assets/js/bootstrap.js')
.scripts('node_modules/jquery-parallax.js/parallax.js', 'public/Assets/js/parallax.js')
.scripts('node_modules/owl.carousel/dist/owl.carousel.min.js', 'public/Assets/js/owl.carousel.min.js')
.sass('resources/scss/bootstrap.scss', 'public/Assets/css/bootstrap.css')
.sass('resources/scss/main.scss', 'public/Assets/css/main.css')
.sass('resources/scss/icons.scss', 'public/Assets/css/icons-bootstrap.css')
.css('node_modules/owl.carousel/dist/assets/owl.carousel.min.css', 'public/Assets/css/owl.carousel.min.css')
