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
require_once HOMIFY_DIR_PATH . '/inc/classes/class-homify-theme.php';
require_once HOMIFY_DIR_PATH . '/inc/classes/class-assets.php';
// require_once HOMIFY_DIR_PATH . '/inc/classes/class-widget.php';


function homify_get_theme_instance()
{
  \HOMIFY_THEME\Inc\HOMIFY_THEME::get_instance();
}
homify_get_theme_instance();


function body_custom_class()
{

  if (is_home()) {
    $classes[] = 'gd-home-page';
  }
  if (is_archive()) {
    $classes[] = 'mg_category_archive_page';
  }
  if (is_author()) {
    $classes[] = 'author-acrhive-page';
  }
  if (is_page()) {
    $classes[] = 'page-archive';
  }
  if (is_search()) {
    $classes[] = 'search-not-found-page';
  }
  if (is_single()) {
    $classes[] = 'single-archive-page';
  }
  if (is_404()) {
    $classes[] = '404-page';
  }
  if (is_page_template('template-pages/thank-you.php')) {
    $classes[] = 'thankyou-page';
  }
  if (is_page_template('template-pages/authors.php')) {
    $classes[] = 'authors-page';
  }
  if (is_page_template('template-pages/contact.php')) {
    $classes[] = 'contact-page';
  }

  return $classes;
}
add_filter('body_class', 'body_custom_class');

/*Add support for additional image file types
-----------------------------------------------*/

function mime_types_support($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  $mimes['webp'] = 'image/webp';
  $mimes['bmp'] = 'image/bmp';
  $mimes['tiff'] = 'image/tiff';
  return $mimes;
};
add_filter('upload_mimes', 'mime_types_support');
