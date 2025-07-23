const mix = require('laravel-mix');
require('laravel-mix-compress');
const webpack = require('webpack');

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

mix.js("resources/js/app.js", "public/js").vue()
    .postCss("resources/css/app.css", "public/css", [
      require("tailwindcss"),
    ]).version()
    .copy('node_modules/select2/dist/css/select2.min.css', 'public/css/select2.min.css')
    .copy('node_modules/select2/dist/js/select2.min.js', 'public/js/select2.min.js')
    .copy('node_modules/@mdi/font/css/materialdesignicons.min.css', 'public/css/materialdesignicons.min.css')
    .copy('node_modules/@mdi/font/fonts', 'public/fonts')
    .copy('node_modules/@webcomponents/webcomponentsjs/webcomponents-bundle.js', 'public/js/webcomponents-bundle.js')
    .webpackConfig({
        plugins: [
            new webpack.DefinePlugin({
                __VUE_PROD_HYDRATION_MISMATCH_DETAILS__: 'false'
            })
        ]
    });
mix.compress({
  productionOnly: true,
  minRatio: 1
});