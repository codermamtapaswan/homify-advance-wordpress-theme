<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Homify
 * @since   Homify 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();


get_template_part('template-parts/content', 'error', array('hey this is 404.php'));


get_footer();
