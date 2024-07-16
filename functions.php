<?php


/**
 * Homify functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Homify
 * @since   Homify 1.0.0
 * 
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}


/*  Theme Contants
---------------------------*/

if (!defined('HOMIFY_DIR_PATH')) {
  define('HOMIFY_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('HOMIFY_DIR_URI')) {
  define('HOMIFY_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('HOMIFY_HOME_URI')) {
  define('HOMIFY_HOME_URI', esc_url(home_url('/')));
}

require_once HOMIFY_DIR_PATH . '/inc/helpers/autoloader.php';
require_once HOMIFY_DIR_PATH . '/inc/helpers/template-tags.php';
require_once HOMIFY_DIR_PATH . '/inc/classes/class-assests.php';
require_once HOMIFY_DIR_PATH . '/inc/classes/class-homify-theme.php';


function homify_get_theme_instance()
{
  \HOMIFY_THEME\Inc\HOMIFY_THEME::get_instance();
}
homify_get_theme_instance();


/*   Register theme assests
---------------------------*/
// add_action('wp_enqueue_scripts', 'homify_register_assets');

// function homify_register_assets()
// {
//   $version = wp_get_theme()->get('version');

//   // Enqueue styles
//   wp_enqueue_style('layout-style', HOMIFY_DIR_URI . "/assets/css/layout.css", array(), $version, 'all');
//   wp_enqueue_style('custom-style', HOMIFY_DIR_URI . "/assets/css/style.css", array(), $version, 'all');

//   // Enqueue script
//   wp_enqueue_script('main-script', HOMIFY_DIR_URI . "/assets/js/script.js", array(), $version, true);

//   // Add preload for fonts
//   $preload_fonts = [
//     'assets/fonts/poppins/poppins-v20-latin-regular.woff2' => 'font/woff2',
//     'assets/fonts/poppins/poppins-v20-latin-regular.ttf' => 'font/ttf',
//     'assets/fonts/poppins/poppins-v20-latin-500.woff2' => 'font/woff2',
//     'assets/fonts/poppins/poppins-v20-latin-500.ttf' => 'font/ttf',
//     'assets/fonts/poppins/poppins-v20-latin-600.woff2' => 'font/woff2',
//     'assets/fonts/poppins/poppins-v20-latin-600.ttf' => 'font/ttf',
//     'assets/fonts/eb-garamond/eb-garamond-v27-latin-700.woff2' => 'font/woff2',
//     'assets/fonts/eb-garamond/eb-garamond-v27-latin-700.ttf' => 'font/ttf',
//   ];

//   foreach ($preload_fonts as $font => $type) {
//     echo '<link rel="preload" href="' . HOMIFY_DIR_URI . '/' . $font . '" as="font" type="' . $type . '" crossorigin="anonymous">' . "\n";
//   }
// }
