<article id="post-<?php echo get_the_ID(); ?>" <?php post_class('switch'); ?>>
    <div class="front">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </div>
    <div class="back" style="background: <?php echo get_field('piece_color'); ?>">
        <?php the_excerpt(); ?>
        <div><a href="<?php the_permalink(); ?>">View</a></div>
    </div>
    <div class="switch-dot"></div>
    <input class="color" type="hidden" value="<?php echo get_field('piece_color'); ?>">
</article>