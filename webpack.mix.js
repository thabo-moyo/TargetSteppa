const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
require('jquery');

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

mix.browserSync({
    proxy: process.env.APP_URL,
    open: true,
    watchOptions: {
        usePolling: true,
        interval: 1
    }
});

mix.js([
        'resources/js/app.js',
        'resources/js/_modal-create.js',
        'resources/js/modals.js',
    ], 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
        require('autoprefixer'),
        require('postcss-import'),
    ])
    .sass('resources/sass/app.scss', 'public/css');
mix.autoload({ 'jquery': ['window.$', 'window.jQuery'] })


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
