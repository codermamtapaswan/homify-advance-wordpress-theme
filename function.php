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

if (!defined('Homify_DIR_PATH')) {
  define('Homify_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('Homify_DIR_URI')) {
  define('Homify_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('Homify_HOME_URI')) {
  define('Homify_HOME_URI', esc_url(home_url('/')));
}


require_once Homify_DIR_PATH . '/inc/helpers/autoloader.php';
require_once Homify_DIR_PATH . '/inc/helpers/template-tags.php';


function Homify_get_theme_instance()
{
  \Homify_THEME\Inc\Homify_THEME::get_instance();
}
Homify_get_theme_instance();
