<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'food_restaurant_pageleft_header' ); ?>

<div class="container">
    <div class="middle-align">       
		<div id="sidebar" class="col-md-4 col-sm-4">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>		 
		<div class="col-md-8 col-sm-8" id="content-lt" >
			<?php while ( have_posts() ) : the_post(); ?>
                
                <h1><?php the_title();?></h1>

                <?php the_content();
                
                //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
        </div>
        <div class="clearfix"></div>    
    </div>
</div>

<?php do_action( 'food_restaurant_pageleft_footer' ); ?>

<?php get_footer(); ?>