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
      //note: if post is available
      if ( have_posts() ) {
        ?>
        <div class="container">
          <?php
            //note: check if it is the blog homepage
            if ( is_home() && ! is_front_page() ) {
              ?>
              <header class="mb-5">
                <h1 class="page-title">
                  <?php single_post_title(); ?>
                </h1>
              </header>
              <?php
            }
          ?>
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

