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


function homify_get_theme_instance()
{
  \HOMIFY_THEME\Inc\HOMIFY_THEME::get_instance();
}
homify_get_theme_instance();
