<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
        <?php get_template_part('templates/single', 'footer'); ?>
        
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>

