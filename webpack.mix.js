const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/compare.js", "public/js")
    .js("resources/js/cookieConsent.js", "public/js")
    .js("resources/js/headerAnim.js", "public/js")
    .js("resources/js/helpBanner.js", "public/js")
    .js("resources/js/homeLoading.js", "public/js")
    .js("resources/js/mapSubpages.js", "public/js")
    .js("resources/js/rangeSlider.js", "public/js")
    .js("resources/js/scripts-plugin.js", "public/js")
    .js("resources/js/searchbarDropdown.js", "public/js")
    .js("resources/js/searchDetails.js", "public/js")
    .js("resources/js/singleMap.js", "public/js")
    .sass("resources/css/app.scss", "public/css")
    .copy("resources/img/*", "public/img")
    .version()
    .disableNotifications();
