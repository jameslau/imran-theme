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

function imran_enqueue_scripts() {
  // note: get_template_directory_uri is going to go all the way to your theme folder and look for the style sheet for the project
  // wp_enqueue_style( 'main-sheet', get_template_directory_uri() . '/main.css', ['stylesheet'] );
  wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
}

// note: wp_enqueue_scripts is what's known as a "hook"
add_action( 'wp_enqueue_scripts', 'imran_enqueue_scripts' );

?>

