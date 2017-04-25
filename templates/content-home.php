<div id="area">
<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>
        <a id="post-<?php echo get_the_ID(); ?>" <?php post_class(); ?> style="background: <?php echo get_field('piece_color'); ?>" href="<?php the_permalink(); ?>">
            <span><?php the_title(); ?></span>
<!--            <p><?php //echo get_field('piece_color'); ?></p>-->
        </a><!-- /#post-<?php get_the_ID(); ?> -->
    <?php endwhile; ?>

<!--
	<div class="navigation">
		<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span>
		<span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    </div> /.navigation 
-->

<?php else: ?>

    <div id="post-404" class="noposts">
        <p><?php _e('None found.','example'); ?></p>
    </div><!-- /#post-404 -->

<?php endif; wp_reset_query(); ?>
</div>