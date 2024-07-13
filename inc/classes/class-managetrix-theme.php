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
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('after_setup_theme', [$this, 'setup_theme']);
  }
  public function setup_theme()
  {
    add_theme_support('title-tag');
  }
}
