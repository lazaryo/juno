<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
    <p class="error404-message">You're lost because what you're looking for doesn't exist! Use the form below to search posts from this site.</p>

    <?php get_search_form(); ?>
<?php endif; ?>

<div class="row format3">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/results/content', 'format3'); ?>
    <?php endwhile; ?>
    
    <div class="navigation">
        <div class="prev alignleft">
            <?php next_posts_link( '<i class="fa fa-arrow-left"></i> Older Posts' ); ?>
        </div>
        
        <div class="next alignright">
            <?php previous_posts_link( 'Newer Posts <i class="fa fa-arrow-right"></i>' ); ?>
        </div>
    </div>
</div>
