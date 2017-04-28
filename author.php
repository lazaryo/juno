<?php get_template_part('templates/author', 'header'); ?>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="author-posts">
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'author', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>
