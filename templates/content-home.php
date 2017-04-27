<div id="area" class="row">
<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>
        <a id="post-<?php echo get_the_ID(); ?>" <?php post_class('col-md-4'); ?> href="<?php the_permalink(); ?>">
            <span style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')"><?php the_title(); ?></span>
            <input class="bg" type="hidden" value="<?php echo get_the_post_thumbnail_url(); ?>">
            <input class="color" type="hidden" value="<?php echo get_field('piece_color'); ?>">
        </a><!-- /#post-<?php echo get_the_ID(); ?>-->
    <?php endwhile; ?>

<?php else: ?>

    <div id="post-404" class="noposts">
        <p><?php _e('None found.','example'); ?></p>
    </div><!-- /#post-404 -->

<?php endif; wp_reset_query(); ?>
</div>