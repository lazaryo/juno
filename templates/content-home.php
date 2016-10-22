<div id="area" class="row">
<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>
        <div id="post-<?php echo get_the_ID(); ?>" <?php post_class('col-md-3'); ?>>
            <div class="piece-banner" style="background-color: <?php echo get_field('piece_color'); ?>"></div>
            <h3 class="piece-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="piece-author"><?= get_the_author(); ?></a>
            <p class="piece-date"><?php echo get_field('piece_date'); ?></p>
            <p class="piece-categories"><?php echo( get_the_category_list(', ') ); ?></p>
            <a href="<?php the_permalink(); ?>" class="to-post">visit page</a>
        </div><!-- /#post-<?php get_the_ID(); ?> -->
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