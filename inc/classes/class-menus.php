<?php

/**
 *  Regiter Menus  
 * 
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 * 
 * @pacakage Homify
 */

namespace HOMIFY_THEME\Inc;

use HOMIFY_THEME\Inc\Traits\Singleton;



class Menus
{
  use Singleton;
  protected function __construct()
  {
    $this->setup_hooks();
  }

  protected function setup_hooks()
  {
    add_action('init', [$this, 'register_menus']);
  }

  public function register_menus()
  {
    register_nav_menus(
      array(
        'Primary-menu' => esc_html__('Header Menu', 'Homify'),
        'Footer-menu' => esc_html__('Footer Menu', 'Homify'),
        'Footer-category-menu' => esc_html__('Footer Category Menu')
      )
    );
  }

  public function get_menu_id($location)
  {
    // Get all the locations
    $locations = get_nav_menu_locations();

    // Get  object id by location
    $get_menu = $locations[$location];
    return !empty($get_menu) ? $get_menu : "";
  }

  public function get_child_menu_items($menu_array, $parent)
  {
    $child_menus = [];
    if (!empty($menu_array) && is_array($menu_array)) {
      foreach ($menu_array as $menu_item) {
        if (intval($menu_item->menu_item_parent) == $parent) {
          array_push($child_menus, $menu_item);
        }
      }
    }

    return $child_menus;
  }
}
