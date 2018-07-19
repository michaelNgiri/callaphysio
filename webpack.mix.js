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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
  mix.scripts([
   			'resources/assets/js/jquery.dropdown.min.js',
            'resources/assets/js/bootstrap.js',
            'resources/assets/js/bootstrap.bundle.js',
            'resources/assets/js/jquery3.3.1.js',
            'resources/assets/js/materialize.min.js'
        ], 
        'public/js/app.js')
   .styles([
            'resources/assets/css/font-awesome.min.css',
            'resources/assets/css/materialize-colors.css',
            'resources/assets/css/materialize.min.css',
            'resources/assets/css/bootstrap.css'
        ], 
        'public/css/app.css')
    .version();