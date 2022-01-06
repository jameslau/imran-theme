<?php

/**
 * Header template.
 * 
 * @package Imran
 */

?>

<!doctype html>

<!-- note: keep this here for dynamic language settings -->
<html lang="<?php language_attributes(); ?>">

<head>

  <!-- note: displays information about the current site -->
  <meta charset="<?php bloginfo('charset') ?>">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- note: this is going to print all the style and link tag elements -->
  <?php wp_head(); ?>

</head>

<!-- note: adds a class for every page -->
<body <?php body_class( 'hello-class' ); ?>>

<!-- note: this was added after WP 5.2. allows scripts to be added after the body tag -->
<?php wp_body_open(); ?>

<header>Header</header>