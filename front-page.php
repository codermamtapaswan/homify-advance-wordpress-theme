<?php

/**
 * The front page template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Homify
 * @since   Homify 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();

if (is_active_sidebar('homify-front-page-sidebar')) {
  dynamic_sidebar('homify-front-page-sidebar');
}

get_footer();
