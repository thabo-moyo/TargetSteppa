const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
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

mix.browserSync(process.env.APP_URL);

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
        require('autoprefixer'),
        require('postcss-import'),
    ])
.sass('resources/sass/app.scss', 'public/css')
.sourceMaps();


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
