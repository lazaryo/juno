<a id="post-<?php echo get_the_ID(); ?>" <?php post_class('col-md-4'); ?> href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
        <span class="bg" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>')">
    <?php else: ?>
        <span class="bg" style="background: #333333">
    <?php endif; ?>
        <span><?php the_title(); ?></span>
    </span>
    <input class="default-color" type="hidden" value="#333333">
    <input class="has-bg" type="hidden" value="<?php echo has_post_thumbnail(); ?>">
    <input class="hidden-bg" type="hidden" value="<?php echo get_the_post_thumbnail_url(); ?>">
    <input class="color" type="hidden" value="<?php echo get_field('piece_color'); ?>">
</a><!-- /#post-<?php echo get_the_ID(); ?>-->
