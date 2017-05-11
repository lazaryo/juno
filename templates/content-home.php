<div class="row format2">
<?php if( have_posts() ): ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/results/content', 'format2'); ?>
    <?php endwhile; ?>

<?php else: ?>

    <div id="post-404" class="noposts">
        <p><?php _e('None found.','example'); ?></p>
    </div><!-- /#post-404 -->

<?php endif; wp_reset_query(); ?>
</div>
