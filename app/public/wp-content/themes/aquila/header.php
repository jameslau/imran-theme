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
<body>
<header>Header</header>