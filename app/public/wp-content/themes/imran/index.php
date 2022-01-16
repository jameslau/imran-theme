<?php
/**
 * Main template file.
 * 
 * @package Imran
 */


get_header();

?>

<div id="primary">
  <main id="main" class="site-main mt-5" role="main">
    <?php
      //note: the famous WP loop
      if ( have_posts() ) {
        ?>
        <div class="container">
          <?php
            while ( have_posts() ) : the_post();
              the_title();
              //the_excerpt();
              the_content();
            endwhile;
          ?>
        </div>
        <?php
      } 
    ?>
  </main>
</div>
 
<?php 

get_footer();

