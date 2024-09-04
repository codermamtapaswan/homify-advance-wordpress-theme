<?php

/**
 * The template for displaying Search results pages.
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

  <div class="row row-gap">
  <?php
  if (have_posts()):
    while (have_posts()):
    the_post();
    global $post;
    $cat = get_the_category($post->ID);
    $catName = $cat[0]->cat_name;
    $catID = get_cat_ID($catName);
    $catSlug = get_category_link($catID);
      ?>
       <div class="col-md-4 col">
        <div class="gd-midcat-card">
          <div class="img-placeholder">
            <?php
            if (has_post_thumbnail()) {
              echo has_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
            }
            ?>
          </div>
          <div class="gd-card-content">
            <a href="<?php echo $catSlug; ?>" class="gd-category-btn">
              <?php echo $catName; ?>
            </a>
            <a href="<?php the_permalink() ?>" class="gd-title">
              <?php echo  wp_trim_words(get_the_title(), 10) ?>
            </a>
            <div class="gd-timeline">
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="gd-author">
                <?php the_author() ?>
              </a>
              <span>2 min read</span>
            </div>
          </div>
        </div>
      </div>
      <?php
    endwhile;
  else:
    get_template_part('temlate-parts/content','search-not-found');
  endif;
  ?>
  </div>

</div>


<?php get_footer(); ?>