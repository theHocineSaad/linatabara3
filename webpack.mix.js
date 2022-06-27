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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/particles.min.js', 'public/js')
    .js('resources/js/donorsPage.js', 'public/js')
    .js('resources/js/practicle-js-engine.js', 'public/js')
    .js('resources/js/gettingDairas.js', 'public/js')
    .js('resources/js/registerPage.js', 'public/js')
    .js('resources/js/donorsSearchFormValidation.js', 'public/js')

    .sass('resources/sass/bootstrap.scss', 'public/css')
    .sass('resources/sass/bootstrap-rtl.scss', 'public/css')

    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .postCss('resources/css/homeHero.css', 'public/css')
    .postCss('resources/css/bloodDonationBenefits.css', 'public/css')
    .postCss('resources/css/cta.css', 'public/css')
    .postCss('resources/css/footer.css', 'public/css')
    .postCss('resources/css/stats.css', 'public/css')
    .postCss('resources/css/loginPage.css', 'public/css')
    .postCss('resources/css/registerPage.css', 'public/css')
    .postCss('resources/css/donorsPage.css', 'public/css')
    .postCss('resources/css/faq.css', 'public/css');
