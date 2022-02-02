const mix = require('laravel-mix');
require('mix-tailwindcss');
//const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

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

/*mix.browserSync({
    proxy: process.env.APP_URL,
    open: false,
    watchOptions: {
        usePolling: true,
        interval: 1
    }
});*/

mix.js([
    'resources/js/app.js',
], 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
        require('autoprefixer'),
        require('postcss-import'),
    ])
    .sourceMaps()
    .sass('resources/sass/app.scss', 'public/css')
    .vue();

//mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })


/* mix.webpackConfig({
    module: {
        rules: [{
            use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
        }]
    },
    optimization: {
        minimizer: [
            new CssMinimizerPlugin(),
        ]
    }
}) */
