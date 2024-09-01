<?php

/**
 *  OneWeb Inc register widget sidebars
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 *
 * @package Homify
 * @since   Homify 1.0.0
 */

namespace HOMIFY_THEME\Inc;

use HOMIFY_THEME\Inc\Traits\Singleton;

class Widgets
{
  use Singleton;

  protected function __construct()
  {
    $this->setup_hooks();
  }
  protected function setup_hooks()
  {
    add_action('widgets_init', [$this, 'homify_register_sidebar']);
  }
  public function homify_register_sidebar()
  {

    register_sidebar(array(
      'name' => __('Front Page', 'homify'),
      'id' => 'homify-front-page-sidebar',
      'description' => __('Widget area for the front page', 'homify'),
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => '',
    ));
  }
}
