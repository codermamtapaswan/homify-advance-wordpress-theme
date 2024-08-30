<?php

/**
 * Bootstraps The Theme
 * 
 *@pacakage Managetrix
 * 
 */

namespace HOMIFY_THEME\Inc;

use HOMIFY_THEME\Inc\Traits\Singleton;

class HOMIFY_THEME
{
  use Singleton;

  protected function __construct()
  {
    /* Action 
    *
    */
    Assests::get_instance();
    Menus::get_instance();
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('after_setup_theme', [$this, 'setup_theme']);
  }
  public function setup_theme()
  {
    // https://developer.wordpress.org/reference/functions/add_theme_support/

    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_editor_style();
    // global $content_width;
    // if (isset($content_width)) {
    //   $content_width = 1240;
    // }
  }
}
