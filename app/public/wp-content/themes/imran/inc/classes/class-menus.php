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

}