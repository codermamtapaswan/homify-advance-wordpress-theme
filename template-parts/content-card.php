<?php
    global $post;
    $cat = get_the_category($post->ID);
    $catName = $cat[0]->cat_name;
    $catID = get_cat_ID($catName);
    $catSlug = get_category_link($catID);
      ?>
        <div class="gd-card grid-md-30">
          <div class="img-placeholder">
            <?php
            if (has_post_thumbnail()) {
              has_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
            }
            ?>
          </div>
          <div class="gd-card-content">
            <a href="<?php echo $catSlug; ?>" class="gd-category">
              <?php echo $catName; ?>
            </a>
            <a href="<?php echo the_permalink() ?>" class="gd-title">
              <?php echo  wp_trim_words(get_the_title(), 10) ?>
            </a>
            <div class="gd-timeline">
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="gd-author">
                <?php echo the_author() ?>
              </a>
              <span>2 min read</span>
            </div>
          </div>
        </div>

