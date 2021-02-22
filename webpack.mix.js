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

mix.scripts([
	'resources/js/modernizr-2.6.2.min.js',
	// 'resources/js/respond.min.js',
	'resources/js/jquery.min.js',
	'resources/js/jquery.easing.1.3.js',
	'resources/js/bootstrap.min.js',
	'resources/js/jquery.waypoints.min.js',
	'resources/js/owl.carousel.min.js',
	// 'resources/js/jquery.style.switcher.js',
	'resources/js/main.js',
	],'public/js/app.js')

	.styles([
	'resources/css/animate.css',
	// 'resources/css/icomoon.css',
	// 'resources/css/simple-line-icons.css',
	'resources/css/font-awesome.css',
	'resources/css/owl.carousel.min.css',
	'resources/css/owl.theme.default.min.css',
	'resources/css/bootstrap.css',
	// 'resources/css/magnific-popup.css',
	'resources/css/style.css',
	], 'public/css/app.css')

    // .sass('resources/sass/app.scss', 'public/css');