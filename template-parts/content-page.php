        <!-- Section 1 ================= START -->
        <div class="container">
          <div class="page-header grid">
            <p id="breadcrumbs"><span><span class="breadcrumb_last" aria-current="page">Page Template</span></span>
            </p>
            <h1><?php the_title(); ?></h1>
            <div class="gd-timeline">
              <strong>Last Updated:</strong>
              <span><?php the_modified_date('F j, Y') ?></span>
            </div>

          </div>
          <div class="page-content">
            <?php
            // Apply Content Filter
            $content = apply_filters("the_content", get_the_content());
            echo $content;
            ?>
          </div>
        </div>
        <!-- Section 1 =========== END -->