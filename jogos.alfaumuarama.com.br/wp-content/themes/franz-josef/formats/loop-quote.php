<?php 
	global $franz_settings; 
	
	if ( $franz_settings['tiled_posts'] ) $col = 'col-sm-6';
	else $col = 'col-md-12';
?>
<div class="item-wrap <?php echo $col; ?>">
    <div <?php post_class(); ?> id="entry-<?php the_ID(); ?>">
        
        <?php 
            if ( ( $embed_code = franz_get_archive_post_embed( get_the_ID() ) ) || franz_has_post_image() ) : ?>
            
                <div class="featured-image">
                    <?php if ( $embed_code ) : echo $embed_code; else : ?>
                        <a href="<?php the_permalink(); ?>"><?php franz_the_post_image(); ?></a>
                    <?php endif; ?>
                 </div>
                <?php do_action( 'franz_loop_thumbnail' ); ?>
            
        <?php endif; ?>
        
        <div class="title-wrap">
            <?php the_content(); ?>           
            <div class="entry-meta-wrap"><?php franz_entry_meta(); ?></div>
        </div>
        
        <?php do_action( 'franz_loop_format_quote' ); ?>
    </div>
</div>