<article <?php post_class('col-md-6'); ?>>
   <div>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="entry-meta row">
            <div class="col-md-6">
                <i class="fa fa-clock-o"></i>
                <time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
            </div>
            <div class="col-md-6">
                <i class="fa fa-pencil"></i>
                <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author"><?= get_the_author(); ?></a>
            </div>
            <div class="col-md-12">
                <i class="fa fa-tag"></i>
                <?php echo the_category(', '); ?>
            </div>
        </div>
        <a href="<?php the_permalink(); ?>" class="read" style="background: <?php echo get_field('piece_color'); ?>">Read</a>
        
        <input class="color" type="hidden" value="<?php echo get_field('piece_color'); ?>">
    </div>
</article><!-- /#post-<?php echo get_the_ID(); ?>-->
