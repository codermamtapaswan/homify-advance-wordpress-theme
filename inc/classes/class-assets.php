<?php

/**
 *  Enqueue Theme assets
 * 
 * @pacakage Homify
 */

namespace HOMIFY_THEME\Inc;

use HOMIFY_THEME\Inc\Traits\Singleton;

class Assests
{
  use Singleton;
  protected function __construct()
  {
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
  }



  public function register_styles()
  {
    $version = wp_get_theme()->get('version');

    // Enqueue styles
    wp_enqueue_style('layout-style', HOMIFY_DIR_URI . "/assets/css/layout.css", array(), $version, 'all');
    wp_enqueue_style('custom-style', HOMIFY_DIR_URI . "/assets/css/style.css", array(), $version, 'all');
    // Add preload for fonts
    $preload_fonts = [
      'assets/fonts/poppins/poppins-v20-latin-regular.woff2' => 'font/woff2',
      'assets/fonts/poppins/poppins-v20-latin-regular.ttf' => 'font/ttf',
      'assets/fonts/poppins/poppins-v20-latin-500.woff2' => 'font/woff2',
      'assets/fonts/poppins/poppins-v20-latin-500.ttf' => 'font/ttf',
      'assets/fonts/poppins/poppins-v20-latin-600.woff2' => 'font/woff2',
      'assets/fonts/poppins/poppins-v20-latin-600.ttf' => 'font/ttf',
      'assets/fonts/eb-garamond/eb-garamond-v27-latin-700.woff2' => 'font/woff2',
      'assets/fonts/eb-garamond/eb-garamond-v27-latin-700.ttf' => 'font/ttf',
    ];

    foreach ($preload_fonts as $font => $type) {
      echo '<link rel="preload" href="' . HOMIFY_DIR_URI . '/' . $font . '" as="font" type="' . $type . '" crossorigin="anonymous">' . "\n";
    }
  }



  public function register_scripts()
  {
    $version = wp_get_theme()->get('version');
    // Enqueue script
    wp_enqueue_script('main-script', HOMIFY_DIR_URI . "/assets/js/script.js", array(), $version, true);
  }
}
