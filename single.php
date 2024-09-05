<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Homify
 * @since   Homify 1.0.0
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="blog-header">
  <div class="container  grid">
    <?php while (have_posts()) :  the_post(); ?>
      <p id="breadcrumbs">
        <span>
          <span>
            <a href="#">Home</a>
          </span>
          <span>
            <a href="#">Blog</a>
          </span>
          <span>
            <a href="#">Banking</a>
          </span>
        </span>
      </p>

      <h1><?php the_title(); ?></h1>


      <div class="blog-detail flex-wrap">

        <span class="gd-timeline">By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
        </span>
        <span class="gd-timeline">
          <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_511_6471)">
              <path
                d="M12.6667 3.27771H3.33333C2.59695 3.27771 2 3.87466 2 4.61104V13.9444C2 14.6808 2.59695 15.2777 3.33333 15.2777H12.6667C13.403 15.2777 14 14.6808 14 13.9444V4.61104C14 3.87466 13.403 3.27771 12.6667 3.27771Z"
                stroke="#3D564A" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
              <path d="M10.6665 1.94446V4.61112" stroke="#3D564A" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M5.3335 1.94446V4.61112" stroke="#3D564A" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" />
              <path d="M2 7.27771H14" stroke="#3D564A" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_511_6471">
                <rect width="16" height="16" fill="white" transform="translate(0 0.611084)" />
              </clipPath>
            </defs>
          </svg>

          Updated on <?php the_modified_date('F j,Y') ?>
        </span>
        <span class="gd-timeline">
          Review by <a href="#">Manpreet Kaur Sandhu</a>
        </span>

      </div>
    <?php endwhile; ?>
  </div>
</div>


<div class="container">
  <div class="row row-gap">

    <div class="col-lg-3">
      <?php get_sidebar(); ?>
    </div>


    <div class="col-lg-8">
      <div class="blog-content">
        <?php echo apply_filters('the_content', get_the_content()) ?>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="gd-sep">Related posts</div>
      <div class="row row-gap">

        <?php
        // Get the categories of the current post
        $categories = get_the_category();
        // print_r($categories)

        if ($categories) {
          $cat_ids = array();
          foreach ($categories as $cat) {
            // var_dump($cat);
            $cat_ids = $cat->term_id;
          }
        }

        // Set up arguments for the related posts query
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'category__in' => $cat_ids,
          'post__not_in' => array(get_the_ID()),
          'posts_per_page' => 6, // Change the number of related posts to display here
        );

        $related_posts = new WP_Query($args);
        // Output the related posts
        ?>
        <?php if ($related_posts->have_posts()) :
          while ($related_posts->have_posts()) :
            $related_posts->the_post(); ?>
            <div class="col-lg-4 col-md-6">
              <?php get_template_part('template-parts/content', 'card'); ?>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>

  </div>
</div>

<?php get_footer();
