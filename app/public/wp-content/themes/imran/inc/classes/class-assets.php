<?php
/**
 * Enqueue theme assets
 * 
 * @package Imran
 */

namespace IMRAN_THEME\Inc;

use IMRAN_THEME\Inc\Traits\Singleton;

class Assets {
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
    add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
    add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );

  }

  public function register_styles() {
    // REGISTER STYLES
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( IMRAN_DIR_PATH . '/style.css' ), 'all' );
    wp_register_style( 'bootstrap-css', IMRAN_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all' );
    
    // ENQUEUE STYLES
    wp_enqueue_style( 'style-css' );
    wp_enqueue_style( 'bootstrap-css' );
  }

  public function register_scripts() {
    // REGISTER SCRIPTS
    wp_register_script( 'main-js', IMRAN_DIR_URI . '/assets/main.js', [], filemtime( IMRAN_DIR_PATH . '/assets/main.js'), true );
    wp_register_script( 'bootstrap-js', IMRAN_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );

    // ENQUEUE SCRIPTS
    wp_enqueue_script( 'main-js' );
    wp_enqueue_script( 'bootstrap-js' );
  }

}