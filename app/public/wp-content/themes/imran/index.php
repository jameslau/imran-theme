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
      if ( have_posts() ) :
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
          <div class="row">
            <?php
              
              $index = 0;
              $no_of_columns = 1;

              //note: First case when index is 0
              //note: Second case when index is 1
              //note: continues cases until it loops through all posts
              //note: start the loop
              while ( have_posts() ) : the_post();
                
                //note: is first case zero? yes.
                //note: is second case one? yes.
                //note: number of index divided by columns is equal to zero. opening tag will show as long as index is zero
                if ( 0 === $index % $no_of_columns ) {
                  ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                  <?php
                }
                
                get_template_part( 'template-parts/content' );

                //note: index is increment by one (this depends on how many posts you have total)
                //note: first case, indexes value is equal to one
                //note: second case, indexes value is equal to two
                $index++;

                //note: if the index is NOT zero (!==) and if the remainder of index, complete the closing tag
                if ( 0 !== $index && 0 === $index % $no_of_columns ) {
                  ?>
                    </div>
                  <?php
                }
                
              endwhile;
            ?>
          </div>
        
        <?php
        else :

          //note: if there are no posts, this is where it will be rendered
          get_template_part( 'template-parts/content-none' );

        endif;

    ?>
    </div>
  </main>
</div>
 
<?php 

get_footer();

