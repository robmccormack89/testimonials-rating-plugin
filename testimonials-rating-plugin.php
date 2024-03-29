<?php
/*
Plugin Name: Testimonials Rating Section by RMcC
Plugin URI: #
Description: Add some testimonials (CPT) to your site using the [testimonials_rating_section] shortcode. Add a rating (1-5) to each testimonial using the 'testimonial_rating' custom-field key. This plugin is translation-ready.
Version: 1.0.0
Author: robmccormack89
Author URI: #
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: testimonials-rating
Domain Path: /languages/
*/

// don't run if someone access this file directly
defined('ABSPATH') || exit;

// define some constants
if (!defined('TESTIMONIALS_RATING_PATH')) define('TESTIMONIALS_RATING_PATH', plugin_dir_path( __FILE__ ));
if (!defined('TESTIMONIALS_RATING_URL')) define('TESTIMONIALS_RATING_URL', plugin_dir_url( __FILE__ ));
if (!defined('TESTIMONIALS_RATING_BASE')) define('TESTIMONIALS_RATING_BASE', dirname(plugin_basename( __FILE__ )));

// require the composer autoloader
if (file_exists($composer_autoload = __DIR__.'/vendor/autoload.php')) require_once $composer_autoload;

// then require the main plugin class. this class extends Timber/Timber which is required via composer
new Rmcc\TestimonialsRating;

// require action functions 
require_once('inc/functions.php');