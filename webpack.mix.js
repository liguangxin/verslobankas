const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js');

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('postcss-nested'),
    require('postcss-custom-properties'),
    require('autoprefixer'),
]);

mix.options({
    processCssUrls: false,
    hmrOptions: {
        host: 'verslobankas.test',
        port: 8080
    }
});

if (mix.inProduction()) {
    mix.version();
}
