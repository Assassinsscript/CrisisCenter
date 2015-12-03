var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less([
        'bootstrap/bootstrap.less',
        'font-awesome/font-awesome.less',
        'style.less'
    ], 'public/css/app.min.css');

    mix.scripts([
        'jquery-2.1.1.js',
        'bootstrap.min.js',
        'inspinia.js'
    ], 'public/js/app.min.js')
});
