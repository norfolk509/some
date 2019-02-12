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

mix.js('resources/js/bootstrap.js', 'public/js/')
   .scripts('resources/js/scripts/', 'public/js/nutaku.js')
   .scripts('resources/js/home.js', 'public/js/home.js')
   .scripts('resources/js/game-catalog.js', 'public/js/game-catalog.js')
   .sass('resources/sass/nutaku.scss', 'public/css')
   .copyDirectory('resources/images', 'public/images')
   .copyDirectory('resources/fonts', 'public/fonts')
   .copy('node_modules/slick-carousel/slick/slick.min.js', 'public/js')
   .disableNotifications();


/*
 |--------------------------------------------------------------------------
 | BrowserSync settings
 |--------------------------------------------------------------------------
 |
 | Set APP_BROWSERSYNC variable to true
 | Make sure APP_URL in your .env file is the domain you are using to open
 | the project
 |
 */
if (process.env.APP_BROWSERSYNC != 'undefined' && process.env.APP_BROWSERSYNC == 'true') {
    mix.browserSync({
        proxy: process.env.APP_URL
    });
}
