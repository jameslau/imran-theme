<?php
/**
 * Template for entry header
 * 
 * @package Imran
 */

//notes: get and store the ID of the post
$the_post_id = get_the_ID();

//notes: create a variable to check if post has thumbnail. pass ID of the post ($the_post_id)
$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
?>

<header class="entry-header">
  <?php 
    //notes: display if featured image is available
    if ( $has_post_thumbnail ) { 
      ?>
        <div class="entry-image mb-3">
          <a href="<?php echo esc_url( get_permalink() ); ?>">
            <?php 

              the_post_custom_thumbnail(
                $the_post_id,
                'featured-large',
                [
                  'sizes' => '(max-width: 590px) 590px, 425px',
                  'class' => 'attachment-feature-large size-featured-image'
                ]
              )

            ?>
          </a>
        </div>
      <?php
    }
  ?>
</header>





