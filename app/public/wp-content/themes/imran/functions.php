<?php

/**
 * Theme Functions.
 * 
 * @package Imran
 */

//echo '<pre>';
// note: direct path to the theme folder
//print_r( get_template_directory_uri() );
// note: direct path to the theme css file/folder
//print_r( get_stylesheet_uri() );
// note: this is like the 'alert' function in javascript
//wp_die();

// echo '<pre>';
// // note: filemtime() sets a time stamp for the file. If things change, it will grab the next time stamp
// print_r( filemtime( get_template_directory() . '/style.css' ));
// wp_die();

// if no defined
if ( ! defined( 'IMRAN_DIR_PATH' ) ) {
  define( 'IMRAN_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

// note: test the defined absolute path 
// echo '<pre>';
// print_r( IMRAN_DIR_PATH );
// wp_die();

if ( ! defined( 'IMRAN_DIR_URI' ) ) {
  define( 'IMRAN_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once IMRAN_DIR_PATH . '/inc/helpers/autoloader.php';
require_once IMRAN_DIR_PATH . '/inc/helpers/template-tags.php';


function imran_get_theme_instance() {
  \IMRAN_THEME\Inc\IMRAN_THEME::get_instance();
}

imran_get_theme_instance();

function imran_enqueue_scripts() {

  // note: get_template_directory_uri is going to go all the way to your theme folder and look for the style sheet for the project
  // wp_enqueue_style( 'main-sheet', get_template_directory_uri() . '/main.css', ['stylesheet'] );
  // wp_enqueue_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
  // wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true );

  // note: register the style
  // wp_register_style( 'style-test-1-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
  // note: enqueue the style when you need it. enqueue it only when you need it or on a specific page
  // note: best to register styles and scripts first and then enqueue them whenever you need them
  // exmaple: if ( is_archive() ) { wp_enqueue_style( 'style-test-1-css' ); }
  // wp_enqueue_style( 'style-test-1-css' );


}

// note: wp_enqueue_scripts is what's known as a "hook"
add_action( 'wp_enqueue_scripts', 'imran_enqueue_scripts' );

