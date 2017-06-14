var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var del = require('del');
var themeInfo = require('./theme.json');

process.env.DISABLE_NOTIFIER = true;

elixir.config.publicPath = 'assets';

var publicPath = '../../public';
var themePath = publicPath + '/themes/Videometer';
var cssPath = themePath + '/css';
var jsPath =  themePath + '/js';

var Task = elixir.Task;

elixir.extend('del', function(path) {
    new Task('del', function() {
        return del(path, {force:true});
    });
});

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.sass('theme.scss',  cssPath + '/theme.css');

//    mix.del(['assets/css', 'assets/js']);
//    mix.del(themePath+'/**');

//    mix.sass('theme.scss', 'resources/assets/css/theme.css');

//    mix.scripts([
//        "jquery.themepunch.tools.min.js",
//        "jquery.themepunch.revolution.min.js",
//        "extensions/revolution.extension.actions.min.js",
//        "extensions/revolution.extension.carousel.min.js",
//        "extensions/revolution.extension.kenburn.min.js",
//        "extensions/revolution.extension.layeranimation.min.js",
//        "extensions/revolution.extension.migration.min.js",
//        "extensions/revolution.extension.navigation.min.js",
//        "extensions/revolution.extension.parallax.min.js",
//        "extensions/revolution.extension.slideanims.min.js",
//        "extensions/revolution.extension.video.min.js"
//    ], 'resources/assets/js/revolution-slider.min.js', 'resources/assets/vendor/revo-slider/js');
//
//    mix.styles([
//        'settings.css',
//        'layers.css',
//        'navigation.css',
//        'custom.css'
//    ], 'resources/assets/vendor/revo-slider/css/revolution-slider.css', 'resources/assets/vendor/revo-slider/css');
//
//    mix.copy('resources/assets', 'assets')
//        .copy('resources/assets/vendor/flag-icon-css/flags', 'assets/flags');
//
//    mix.stylistPublish();

});