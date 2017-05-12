<div class="row results format2">
<?php if( have_posts() ): ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/results/content', 'format2'); ?>
    <?php endwhile; ?>
    
    <div class="navigation">
        <div class="prev alignleft">
            <?php next_posts_link( '<i class="fa fa-arrow-left"></i> Older Posts' ); ?>
        </div>
        
        <div class="next alignright">
            <?php previous_posts_link( 'Newer Posts <i class="fa fa-arrow-right"></i>' ); ?>
        </div>
    </div>
<?php else: ?>

    <div id="post-404" class="noposts">
        <p><?php _e('None found.','example'); ?></p>
    </div><!-- /#post-404 -->

<?php endif; wp_reset_query(); ?>
</div>