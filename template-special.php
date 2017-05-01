<?php
/**
*** Template Name: Special Template
***/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/special', 'header'); ?>
    <?php get_template_part('templates/content', 'special'); ?>
<?php endwhile; ?>
