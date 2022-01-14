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

}