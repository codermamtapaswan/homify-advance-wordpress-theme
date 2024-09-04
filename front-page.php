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

?>
<!-- Section 4 ================= START -->
<div class="container gd-con-3">
  <div class="gd-sep">Latest Post</div>
  <div class="scroll-cont row">
    <?php
    $sec_4_args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 3,
      'cat' => 327,
      'order' => 'DESC',
      'orderby' => 'date'
    );
    $query = new WP_Query($sec_4_args);
   
    echo $query->query_vars['category_name'];

    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post();
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
                  the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
              }
              ?>
            </div>
            <div class="gd-card-content">
              <a href="<?php echo $catSlug; ?>" class="gd-category-btn">
                <?php echo $catName; ?>
              </a>
              <a href="<?php the_permalink() ?>" class="gd-title">
                <?php echo wp_trim_words(get_the_title(), 10) ?>
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
    endif;
    wp_reset_postdata();
    ?>



  </div>
</div>
<!-- Section 4 =========== END -->

<!-- Section 5 ================= START -->
<div class="bg-img gd-con-4">
  <div class="container">
    <div class="gd-sep">REMODELING GUIDES</div>
    <div class="category-post">
      <?php
      $sec_4_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'cat' => 327,
        'order' => 'DESC',
        'orderby' => 'date'
      );
      $query = new WP_Query($sec_4_args);
      if ($query->have_posts()):
        while ($query->have_posts()):
          $query->the_post();
          global $post;

          $cat = get_the_category($post->ID);
          $catName = $cat[0]->cat_name;
          $catID = get_cat_ID($catName);
          $catSlug = get_category_link($catID);

          if ($query->current_post === 0) {
      ?>
            <div class="gd-bg-cont">
              <div class="gd-card grid-50">
                <div class="gd-card-content">
                  <a href="<?php echo $catSlug; ?>" class="gd-category-btn">
                    <?php echo $catName; ?>
                  </a>
                  <a href="<?php the_permalink() ?>" class="gd-big-title">
                    <?php echo  wp_trim_words(get_the_title(), 10) ?>
                  </a>
                  <div class="gd-timeline">
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="gd-author">
                      <?php echo get_the_author() ?>
                    </a>
                  </div>
                </div>
                <div class="img-placeholder">
                  <?php
                  if (has_post_thumbnail()) {
                   echo has_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                  } ?>
                </div>
              </div>
            </div>
          <?php
          } else if ($query->current_post === 1) {
          ?>
            <div class="row row-gap gd-shadow-cont">
              <div class="col-lg-6">
                <div class="gd-card grid-md-30">
                  <div class="img-placeholder">
                    <?php
                    if (has_post_thumbnail()) {
                     echo  has_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
                    } ?>
                  </div>
                  <div class="gd-card-content">
                    <a href="<?php echo $catSlug; ?>" class="gd-category">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="#3D564A" d="M0 0h6v6H0z"></path>
                      </svg>
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
          } else {
            if ($query->current_post === 2) echo '<div class="col-lg-6">';
            ?>
              <div class="gd-card-content border-bottom">
                <a href="<?php echo $catSlug; ?>" class="gd-category">
                  <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="#3D564A" d="M0 0h6v6H0z"></path>
                  </svg>
                  <?php echo $catName; ?>
                </a>
                <a href="<?php the_permalink() ?>" class="gd-title">
                  <?php echo  wp_trim_words(get_the_title(), 10) ?>
                </a>

              </div>
        <?php

          }

        endwhile;

        if ($query->post_count > 2) echo '</div>'; // closing div col-lg-6
        if ($query->post_count > 0) echo '</div>'; // closing row

      endif;
      wp_reset_postdata();
        ?>


            </div>
    </div>
    <!-- Section 5 =========== END -->

    <?php
    get_footer();
