var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        'libs/AdminLTE.min.css',
        'libs/bootstrap.min.css',
        'libs/bootstrap3-wysihtml5.min.css',
        'libs/font-awesome.min.css',
        'libs/ionicons.min.css',
        'libs/select2.min.css',
        'libs/skin-blue.min.css'
    ], 'public/css/all.css', 'resources/css');

    mix.styles([
        'style.css',
        'libs/bootstrap.min.css',
    ], 'public/css/styles.css', 'resources/css');

    mix.scripts([
        'libs/app.min.js',
        'libs/bootstrap.min.js',
        'libs/bootstrap3-wysihtml5.all.min.js',
        'libs/jquery.min.js',
        'libs/select2.min.js'
    ], 'public/js/all.js', 'resources/js');

    mix.scripts([
        'libs/bootstrap.min.js',
        'libs/search.js',
    ], 'public/js/scripts.js', 'resources/js');

});
