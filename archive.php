<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="row format3">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/results/content', 'format3'); ?>
    <?php endwhile; ?>
</div>
