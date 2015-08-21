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

var paths = {
    'foundation': './resources/assets/bower_components/foundation/',
    'font_awesome': './resources/assets/bower_components/fontawesome/',
    'modernizr': './resources/assets/bower_components/modernizr/',
    'jquery': './resources/assets/bower_components/jquery/'
}

/**
 * Custom SASS including foundation + font-awesome
 */
elixir(function(mix) {
    mix.sass([
        'app.scss',
        '../../../' + paths.font_awesome + 'scss/font-awesome.scss',
    ], 'public/css/', {includePaths: [
        paths.foundation + 'scss/',
        paths.font_awesome + 'scss/',
    ]});
    mix.copy(paths.font_awesome + 'fonts', '/public/fonts');
});

/**
 * Modernizr + Jquery JS
 */
elixir(function(mix) {
    mix.scripts(['../../../' + paths.modernizr + 'modernizr.js'], '/public/js/modernizr.min.js');
    mix.copy(paths.jquery + 'dist/jquery.min.*', '/public/js/');
});

/**
 * Foundation and custom JS
 */
elixir(function(mix) {
    mix.scripts([
        '../../../' + paths.foundation + 'js/foundation.js',
        'app.js',
    ], '/public/js/app.min.js');
});
