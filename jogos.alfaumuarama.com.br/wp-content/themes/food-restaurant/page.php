<?php
/**
 * Displaying all pages.
 *
 * @package Food Restaurant
 */

get_header(); ?>

<?php do_action( 'food_restaurant_page_header' ); ?>

<div id="content-lt" class="container">
    <div class="middle-align">       
        <div class="col-md-12">
            <?php 
            while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title();?></h1>
                <?php the_content();

                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'food-restaurant' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'food-restaurant' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
                
                ?>  
			<?php edit_post_link( __( 'Edit', 'food-restaurant' ), '<span class="edit-link">', '</span>' ); ?>				
            <?php endwhile; // end of the loop. ?>            
        </div>        
        <div class="clear"></div>    
    </div>
</div><!-- container -->

<?php do_action( 'food_restaurant_page_footer' ); ?>

<?php get_footer(); ?>