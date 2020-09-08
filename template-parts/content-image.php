<?php

/*

@package Wonder Blog Theme
====================================================================
                    IMAGE POST FORMAT
====================================================================

*/
?>


<<<<<<< HEAD
<article id="post-<?php the_ID(); ?>" <?php post_class( 'wonder-format-image' ); ?>>
	
	<header class="entry-header text-center background-image" style="background-image: url(<?php echo wonder_get_attachment(); ?>);">
		
		<?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>
		
		<div class="entry-meta">
			<?php echo wonder_posted_meta(); ?>
		</div>
		
		<div class="entry-excerpt image-caption">
			<?php the_excerpt(); ?>
		</div>
		
	</header>
	
	<footer class="entry-footer">
		<?php echo wonder_posted_footer(); ?>
	</footer>
	
</article>


=======
<article id="post-<?php the_ID(); ?>" <?php post_class('wonder-format-image'); ?> >

    <header class="entry-header text-center background-image" style="background-image: url(<?php echo wonder_get_attachment(); ?>);">
        <?php
         the_title('<h1 class="entry-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">','</a></h1>');
        ?>
        <div class="entry-meta">
            <?php echo wonder_posted_meta(); ?>
        </div>

        <div class="entry-excerpt image-caption">
            <?php the_excerpt(); ?>
        </div>
    </header>

    <footer class="entry-footer">
        <?php echo wonder_posted_footer(); ?>
    </footer>



</article>

>>>>>>> 7fb0adf1bc1e7e27003c0b44f62219b1736a1a4b
