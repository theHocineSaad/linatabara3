import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/homeHero.css',
            'resources/css/forgotPasswordPage.css',
            'resources/css/aboutPage.css',
            'resources/css/bloodDonationBenefits.css',
            'resources/css/cta.css',
            'resources/css/userDashboard.css',
            'resources/css/footer.css',
            'resources/css/stats.css',
            'resources/css/loginPage.css',
            'resources/css/registerPage.css',
            'resources/css/donorsPage.css',
            'resources/css/faq.css',

            'resources/sass/bootstrap.scss',
            'resources/sass/bootstrap-rtl.scss',

            'resources/js/app.js',
            'resources/js/particles.min.js',
            'resources/js/donorsPage.js',
            'resources/js/practicle-js-engine.js',
            'resources/js/gettingDairas.js',
            'resources/js/userDashboard.js',
            'resources/js/registerPage.js',
            'resources/js/passwordValidationForgotPassword.js',
            'resources/js/donorsSearchFormValidation.js',
        ]),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
