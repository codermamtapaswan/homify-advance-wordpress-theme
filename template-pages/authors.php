<?php

/**
 * Template Name: Authors 
 * Description: Authors page template file.
 *
 * @package Homify
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>
<!-- Section 1 ================= START -->
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

    $authors_query = new WP_User_Query(
      array(
        'has_published_posts' => false,
        'orderby' => 'display_name',
        'order' => 'ASC',
        'exclude' => array(1, 34),
      )
    );

    $authors = $authors_query->get_results();
    // echo "<pre>";
    // var_dump($authors);
    foreach ($authors as $auth): ?>
      <div class="col-lg-4 col-md-6">
        <div class="gd-auth-card grid">
          <a href="#" class="auth-img">
            <?php
            echo get_avatar($auth->Id, 96, '', $auth->display_name, array('class' => 'img-fluid'));

            ?>
          </a>

          <div class="gd-card-content">
            <a href="<?php echo get_author_posts_url(get_the_author_meta($auth->ID)) ?>" class="gd-title"><?php echo $auth->display_name ?></a>
            <div class="gd-social-links">
              <ul>
                <li>
                  <a href="#" aria-label="facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                      viewBox="0 0 27 28">
                      <path
                        d="m16.48 15.002.384-2.508h-2.406v-1.627c0-.686.336-1.355 1.414-1.355h1.094V7.377s-.993-.17-1.942-.17c-1.981 0-3.277 1.202-3.277 3.376v1.911H9.544v2.508h2.203v6.062h2.711v-6.062h2.022Z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" aria-label="instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                      viewBox="0 0 27 27">
                      <g clip-path="url(#clip0_1126_8312)">
                        <path
                          d="M13.3748 10.0236C11.6536 10.0236 10.2652 11.412 10.2652 13.1332C10.2652 14.8545 11.6536 16.2429 13.3748 16.2429C15.0961 16.2429 16.4845 14.8545 16.4845 13.1332C16.4845 11.412 15.0961 10.0236 13.3748 10.0236ZM13.3748 15.1549C12.2625 15.1549 11.3531 14.2483 11.3531 13.1332C11.3531 12.0182 12.2598 11.1115 13.3748 11.1115C14.4899 11.1115 15.3965 12.0182 15.3965 13.1332C15.3965 14.2483 14.4872 15.1549 13.3748 15.1549ZM17.337 9.89637C17.337 10.2996 17.0123 10.6217 16.6117 10.6217C16.2085 10.6217 15.8864 10.2969 15.8864 9.89637C15.8864 9.49582 16.2112 9.17105 16.6117 9.17105C17.0123 9.17105 17.337 9.49582 17.337 9.89637ZM19.3966 10.6325C19.3506 9.66091 19.1287 8.80027 18.4169 8.09119C17.7078 7.38211 16.8472 7.16019 15.8756 7.11147C14.8742 7.05464 11.8728 7.05464 10.8714 7.11147C9.90251 7.15748 9.04187 7.37941 8.33009 8.08849C7.6183 8.79757 7.39908 9.65821 7.35037 10.6298C7.29353 11.6312 7.29353 14.6326 7.35037 15.634C7.39637 16.6056 7.6183 17.4662 8.33009 18.1753C9.04187 18.8844 9.89981 19.1063 10.8714 19.155C11.8728 19.2118 14.8742 19.2118 15.8756 19.155C16.8472 19.109 17.7078 18.8871 18.4169 18.1753C19.126 17.4662 19.3479 16.6056 19.3966 15.634C19.4534 14.6326 19.4534 11.6339 19.3966 10.6325ZM18.1029 16.7084C17.8918 17.2389 17.4832 17.6475 16.95 17.8613C16.1516 18.178 14.2571 18.1049 13.3748 18.1049C12.4925 18.1049 10.5954 18.1753 9.79967 17.8613C9.26921 17.6502 8.86054 17.2416 8.64674 16.7084C8.33009 15.91 8.40316 14.0155 8.40316 13.1332C8.40316 12.2509 8.33279 10.3538 8.64674 9.55807C8.85784 9.02761 9.2665 8.61894 9.79967 8.40514C10.5981 8.08849 12.4925 8.16156 13.3748 8.16156C14.2571 8.16156 16.1543 8.09119 16.95 8.40514C17.4805 8.61624 17.8891 9.02491 18.1029 9.55807C18.4196 10.3565 18.3465 12.2509 18.3465 13.1332C18.3465 14.0155 18.4196 15.9127 18.1029 16.7084Z">
                        </path>
                      </g>
                      <defs>
                        <clipPath id="clip0_1126_8312">
                          <rect width="27" height="27" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" aria-label="twitter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                      viewBox="0 0 27 27">
                      <g clip-path="url(#clip0_1142_8345)">
                        <path
                          d="M17.0949 7.50488H19.0061L14.8318 12.2747L19.7424 18.7661H15.8984L12.8855 14.8301L9.44211 18.7661H7.52824L11.9921 13.6634L7.28461 7.50488H11.226L13.9466 11.1025L17.0949 7.50488ZM16.4235 17.6238H17.482L10.6494 8.5877H9.51249L16.4235 17.6238Z">
                        </path>
                      </g>
                      <defs>
                        <clipPath id="clip0_1142_8345">
                          <rect width="27" height="27" fill="white"></rect>
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" aria-label="linkdin">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                      viewBox="0 0 27 28">
                      <path
                        d="M10.256 19.332H7.743v-8.095h2.513v8.095Zm-1.258-9.199a1.468 1.468 0 0 1-1.03-2.499 1.456 1.456 0 0 1 2.486 1.03c0 .803-.652 1.47-1.456 1.47Zm10.666 9.2h-2.508v-3.941c0-.94-.019-2.144-1.307-2.144-1.307 0-1.507 1.02-1.507 2.076v4.008H11.83v-8.095h2.41v1.105h.036c.336-.636 1.155-1.308 2.378-1.308 2.544 0 3.012 1.676 3.012 3.852v4.446h-.003Z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            <a href="#" class="gd-btn">Read More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>


  </div>
</div>
<!-- Section 1 =========== END -->
<?php get_footer();
