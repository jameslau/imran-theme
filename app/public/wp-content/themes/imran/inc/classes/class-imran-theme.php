<?php

/**
 * Bootstraps the theme
 * 
 * note: this is not related to CSS Bootstrap
 * 
 * @package Imran
 */

namespace IMRAN_THEME\Inc;

use IMRAN_THEME\Inc\Traits\Singleton;

class IMRAN_THEME {
  use Singleton;

  // note: use `protected` instead of `public` to prevent other classes from using its methods
  protected function __construct() {
    
    //wp_die(' hello ');
    // load other classes

    Assets::get_instance();

    $this->setup_hooks();
  }

  protected function setup_hooks() {
    // this is where actions and filters reside

    /** 
     * ACTIONS
    */

    add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );

  }

  public function setup_theme() {
    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', [
      'header-text' => [ 'site-title', 'site-description' ],
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
    ] );
    
    add_theme_support( 'custom-background', [
      'default-color'      => '#fff',
      'default-image'      => get_template_directory_uri() . '/bg-firewatch.jpeg',
      'default-position-x' => 'right',
      'default-position-y' => 'top',
      'default-repeat'     => 'no-repeat',
    ] );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'customize-selective-refresh-widget' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'html5', [
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
    ] );

    add_editor_style();

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );

    global $content_width;
    if ( ! isset( $content_width ) ) {
      $content_width = 1240;
    }

  }

}