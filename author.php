<?php

/**
 * The Author template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @link https://codex.wordpress.org/Author_Templates
 *
 * @package Homify
 * @since   Homify 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<!-- Section 1 ================= START -->
<div class="container">
    <div class="page-header grid">
        <p id="breadcrumbs"><span>
                <span class="breadcrumb_last" aria-current="page">Author Sinlge Page</span></span></p>
        <h1><?php echo get_the_author() ?></h1>
        <div class="gd-timeline">
            <strong>Last Updated:</strong>
            <span><?php echo get_the_modified_date('F j, Y') ?></span>
        </div>
    </div>

    <div class="row row-gap">
        <div class="col-lg-9 blog-content">
            <?php
            global $wp_query;
            $author = $wp_query->get_queried_object();
            // echo '<pre>';
            // var_dump($author);
            echo $author->description;
            ?>
            <div class="h5">Follow me :</div>
            <div class="gd-colored-social-links">
                <ul>
                    <li>
                        <a href="#" aria-label="facebook">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0s10 4.477 10 10"
                                    fill="#1375F0">
                                </path>
                                <path
                                    d="m12.694 10.906.291-1.9h-1.823V7.773c0-.52.255-1.027 1.071-1.027h.83V5.128S12.31 5 11.59 5c-1.502 0-2.483.91-2.483 2.558v1.448h-1.67v1.9h1.67V15.5h2.054v-4.594z"
                                    fill="#fff"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="instagram">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z"
                                    fill="url(#paint0_linear_80_99)"></path>
                                <path
                                    d="M10.253 7.89202C8.94871 7.89202 7.89666 8.94407 7.89666 10.2484C7.89666 11.5527 8.94871 12.6047 10.253 12.6047C11.5573 12.6047 12.6094 11.5527 12.6094 10.2484C12.6094 8.94407 11.5573 7.89202 10.253 7.89202ZM10.253 11.7803C9.41014 11.7803 8.72107 11.0933 8.72107 10.2484C8.72107 9.40344 9.40809 8.71643 10.253 8.71643C11.0979 8.71643 11.7849 9.40344 11.7849 10.2484C11.7849 11.0933 11.0959 11.7803 10.253 11.7803ZM13.2554 7.79563C13.2554 8.10119 13.0093 8.34524 12.7057 8.34524C12.4002 8.34524 12.1561 8.09914 12.1561 7.79563C12.1561 7.49211 12.4022 7.24602 12.7057 7.24602C13.0093 7.24602 13.2554 7.49211 13.2554 7.79563ZM14.816 8.35344C14.7811 7.61721 14.613 6.96506 14.0736 6.42776C13.5363 5.89045 12.8842 5.72229 12.1479 5.68538C11.3891 5.64231 9.11483 5.64231 8.35604 5.68538C7.62186 5.72024 6.96971 5.8884 6.43035 6.42571C5.891 6.96301 5.72488 7.61516 5.68797 8.35139C5.6449 9.11018 5.6449 11.3845 5.68797 12.1433C5.72283 12.8795 5.891 13.5317 6.43035 14.069C6.96971 14.6063 7.61981 14.7744 8.35604 14.8113C9.11483 14.8544 11.3891 14.8544 12.1479 14.8113C12.8842 14.7765 13.5363 14.6083 14.0736 14.069C14.6109 13.5317 14.7791 12.8795 14.816 12.1433C14.8591 11.3845 14.8591 9.11223 14.816 8.35344ZM13.8357 12.9574C13.6758 13.3594 13.3661 13.6691 12.9621 13.8311C12.3571 14.071 10.9216 14.0156 10.253 14.0156C9.58445 14.0156 8.14686 14.069 7.54393 13.8311C7.14197 13.6711 6.83231 13.3614 6.67029 12.9574C6.43035 12.3525 6.48572 10.9169 6.48572 10.2484C6.48572 9.57981 6.4324 8.14221 6.67029 7.53928C6.83026 7.13733 7.13992 6.82766 7.54393 6.66565C8.14891 6.42571 9.58445 6.48108 10.253 6.48108C10.9216 6.48108 12.3592 6.42776 12.9621 6.66565C13.364 6.82561 13.6737 7.13528 13.8357 7.53928C14.0757 8.14426 14.0203 9.57981 14.0203 10.2484C14.0203 10.9169 14.0757 12.3545 13.8357 12.9574Z"
                                    fill="white"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_80_99" x1="7.26172" y1="20" x2="11.7617"
                                        y2="0.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FEDA75"></stop>
                                        <stop offset="0.193415" stop-color="#FA7E1E"></stop>
                                        <stop offset="0.453177" stop-color="#D62976"></stop>
                                        <stop offset="0.73948" stop-color="#962FBF"></stop>
                                        <stop offset="0.99" stop-color="#4F5BD5"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="twitter">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z"
                                    fill="black"></path>
                                <path
                                    d="M13.0025 6.23438H14.4503L11.288 9.84785L15.0081 14.7656H12.096L9.8135 11.7838L7.20491 14.7656H5.755L9.13674 10.8999L5.57043 6.23438H8.55637L10.6174 8.95986L13.0025 6.23438ZM12.4939 13.9002H13.2957L8.11956 7.05469H7.25823L12.4939 13.9002Z"
                                    fill="white"></path>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="#" aria-label="linkedin">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10Z"
                                    fill="#2768B2"></path>
                                <path
                                    d="M7.58359 13.75H5.76953V7.90819H7.58359V13.75ZM6.67559 7.11132C6.09551 7.11132 5.625 6.63085 5.625 6.05077C5.625 5.77214 5.73569 5.50492 5.93271 5.30789C6.12973 5.11087 6.39695 5.00018 6.67559 5.00018C6.95422 5.00018 7.22144 5.11087 7.41846 5.30789C7.61549 5.50492 7.72617 5.77214 7.72617 6.05077C7.72617 6.63085 7.25547 7.11132 6.67559 7.11132ZM12.5629 13.75V10.9062C12.5629 10.2285 12.5492 9.35936 11.6197 9.35936C10.6766 9.35936 10.532 10.0957 10.532 10.8574V13.75H8.71992V7.90819H10.4598V8.70507H10.4852C10.7273 8.24608 11.3189 7.76171 12.2016 7.76171C14.0375 7.76171 14.375 8.97069 14.375 10.541V13.75H12.5629Z"
                                    fill="white"></path>
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-lg-3">
            <div class="sidebar">

                <div class="gd-auth-card">
                    <div class="auth-img">
                        <?php
                        echo get_avatar($author->Id, 96, '', $author->display_name, array('class' => 'img-fluid'));

                        ?>
                    </div>

                    <div class="gd-card-content">
                        <div class="gd-title"><?php echo $author->display_name; ?></div>
                        <p>Social Media and Tech Expert</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-lg-12">

            <div class="gd-sep"><?php echo get_the_author() ?>'s Posts</div>

            <div class="row row-gap">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>

                        <div class="col-lg-4 col">
                            <?php get_template_part('template-parts/content', 'card'); ?>
                        </div>

                <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</div>
<!-- Section 1 =========== END -->

<?php
get_footer();
