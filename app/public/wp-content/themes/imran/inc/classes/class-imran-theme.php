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

  }

}