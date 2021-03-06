<?php

/**
 * Header navigation template.
 * 
 * @package Imran
 */

$menu_class = \Imran_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'imran-header-menu' );

// call the function
$header_menus = wp_get_nav_menu_items( $header_menu_id );
// see all the menu array information
// echo '<pre>';
// print_r( $header_menus );
// wp_die();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid container">
    <?php
      if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
      }
    ?>
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <?php
        if ( ! empty ($header_menus) && is_array( $header_menus ) ) {
        ?>
        
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php 
            foreach ( $header_menus as $menu_item ) {
              if ( ! $menu_item->menu_item_parent ) {
                
                //note: `$menu_class` has been defined at the top
                //note: object operator (->), instantiate into the variable `$menu_class` 
                //note: get entire menu from header and parent and the child menus IDs
                $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID ); 
                // echo '<pre>';
                // print_r( $child_menu_items );
                // wp_die();

                //note: check if the child items have children
                $has_chilren = ! empty( $child_menu_items ) && is_array( $child_menu_items );
                
                //note: if child menu has items
                if ( ! $has_chilren ) {
                   //note: if it doesn't have children
                   ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo esc_url( $menu_item->url ); ?>">
                        <?php echo esc_html( $menu_item->title )?>
                      </a>
                    </li>
                   <?php
                } else {
                  //note: if it does have children
                  ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo esc_url( $menu_item->url ); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?php echo esc_html( $menu_item->title )?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li>
                        <?php 
                          foreach ( $child_menu_items as $child_menu_item ) {
                            ?>
                              <a class="dropdown-item" href="<?php echo esc_url( $child_menu_item->url ); ?>">
                                <?php echo esc_html( $child_menu_item->title )?>
                              </a>
                            <?php
                          }
                        ?>
                      </li>
                    </ul>
                  </li>
                  <?php
                }

                ?>
                  
                  
                <?php
              }
            }
          ?>
        </ul> 

        <?php 
        }

      ?>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>