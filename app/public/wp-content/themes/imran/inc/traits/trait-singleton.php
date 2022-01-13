<?php
/**
 * 
 * 
 */

namespace Imran_Theme\Inc\Traits;

trait Singleton {
  public function __construct() {

  }

  // prevent object cloning
  public function __clone() {

  } 

  // given a finally because it is not meant to be overritten by any other class
  final public static function get_instance() {
    
    // this array is use to hold the instances of the class
    static $instance = [];
    
    // create a variable that will get the class that is being called and hold its value
    $called_class = get_called_class();

    if ( !isset( $instance[ $called_class ] ) ) {
      $instance[ $called_class ] = new $called_class();

      do_action( sprintf( 'imran_theme_singleton_init%s', $called_class ) );
    }

    return $instance [ $called_class ];
 
  }    

}