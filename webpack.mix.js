const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.override(config => {
    config.module.rules.push({
        test: /\.vue$/,
        use: [{
            loader: "vue-svg-inline-loader",
            options: { /* ... */ }
        }]
    })
});

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

mix.js('resources/js/app.js', 'public/js').sourceMaps();

mix.sass('resources/sass/app.scss', 'public/css')
    .tailwind('./tailwind.config.js').sourceMaps();

mix.options({
    hmrOptions: {
        host: 'verslobankas.test',
        port: 8080
    }
});

if (mix.inProduction()) {
    mix.version();
}
