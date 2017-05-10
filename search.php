<?php use Roots\Sage\Titles; ?>

<div class="search-header">
    <h1>Results for: <b><?php echo get_search_query(); ?></b></h1>
</div>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>

<div class="results row">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'search'); ?>
    <?php endwhile; ?>
</div>
