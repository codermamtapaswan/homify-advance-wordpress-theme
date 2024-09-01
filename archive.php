<?php

/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package homify
 * @since   homify 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>


<div class="container">

  <p id="breadcrumbs">
    <span>
      <span>
        <a href="#">Product</a>
      </span><span>
        Accessories
      </span>
    </span>
  </p>

  <?php
  if (have_posts()):
    while (have_posts()):
      $post =  the_post();

      var_dump($post);

    endwhile;
  endif;
  ?>

</div>


<?php get_footer(); ?>