<?php
/**
 * Register Menus
 * 
 * @package Imran
 */

namespace IMRAN_THEME\Inc;

use IMRAN_THEME\Inc\Traits\Singleton;

class Menus {
  
  use Singleton;

  protected function __construct() {
    
    //wp_die(' hello ');
    // load other classes
    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // this is where actions and filters reside

    /** 
     * ACTIONS
    */
    add_action( 'init', [ $this, 'register_menus'] );

  }

  public function register_menus() {
    // note: it will be an array as an parameter
    register_nav_menus ([
      // add the translation function
      'imran-header-menu'  => esc_html__( 'Header Menu', 'imran' ),
      'imran-footer-menu'  => esc_html__( 'Footer Menu', 'imran' ),
    ]);
  }

  public function get_menu_id( $location ) {
    // note: get all the locations
    $locations = get_nav_menu_locations();
    // note: echo out all the menu ids
    // echo '<pre>';
    // print_r ( $locations );
    // wp_die();

    // note: get object id by location
    $menu_id = $locations[$location];
    // note: echo out the specific menu id
    // echo '<pre>';
    // print_r ( $menu_id );
    // wp_die();

    return ! empty( $menu_id ) ? $menu_id : '';
  }

  // note: how to get child menu items
  public function get_child_menu_items( $menu_array, $parent_id ) {

    // note: create an empty array where we'll be pushing the child arrays into and ignoring parent ones
    $child_menus = [];

    // note: error handling. always check before running a foreach loop
    if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
      foreach ( $menu_array as $menu ) {
        // note: if the parent menu id of the child menu items are the same, push them to the '$child_menus' array
        if ( intval( $menu->menu_item_parent ) === $parent_id ) {
          // note: takes the array you are working with and what you want to push inside
          array_push ( $child_menus, $menu );
        }
      }
    }

    return $child_menus;

  }

}