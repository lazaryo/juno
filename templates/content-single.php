<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <input class="default-color" type="hidden" value="#333333">
        <input class="has-bg" type="hidden" value="<?php echo has_post_thumbnail(); ?>">
        <input class="hidden-bg" type="hidden" value="<?php echo get_the_post_thumbnail_url(); ?>">
        <input class="color" type="hidden" value="<?php echo get_field('piece_color'); ?>">
        
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
        <?php get_template_part('templates/single', 'footer'); ?>
        
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>

