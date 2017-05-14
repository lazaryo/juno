<?php use Roots\Sage\Titles; ?>

<?php $headerStyle = get_field('header_style'); if(is_single()): ?>
    <?php if($headerStyle == 'with-featured'): ?>
        <?php if (has_post_thumbnail()): ?>
            <div class="page-header with-featured">
        <?php else: ?>
            <div class="page-header just-color">
        <?php endif; ?>
        <?php else: ?>
        <div class="page-header just-color">
    <?php endif; ?>
<?php else: ?>
    <div class="page-header">
<?php endif; wp_reset_query(); ?>
   
    <header class="banner">
            <a class="brand-link" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            <a href="#" class="bars"></a>
    <!--        <span class="brand-desc"><?php bloginfo('description'); ?></span>-->
    </header>
    
    <?php if(!is_home()): ?>
        <?php if(is_author()): ?>
            <a class="header-title" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php elseif (is_search()): ?>
            <a class="header-title" href="<?php echo get_search_link(); ?>">
        <?php elseif (is_archive()): ?>
            <a class="header-title" href="<?php echo get_category_link($category_id); ?>">
        <?php else: ?>
            <a class="header-title" href="<?php the_permalink(); ?>">
        <?php endif; ?>
        
        <?php if(is_search()): ?>
            <h1>Results for: <b><?php echo get_search_query(); ?></b></h1>
        <?php elseif (is_author()): ?>
            <h1><?= get_the_author(); ?></h1>
        <?php elseif (is_single()): ?>
            <h1><?php the_title(); ?></h1>
        <?php elseif (is_404()): ?>
            <h1>Lost in Space!</h1>
        <?php else: ?>
            <h1><?= Titles\title(); ?></h1>
        <?php endif; wp_reset_query(); ?>
    </a>
    <?php endif; wp_reset_query(); ?>
</div>

<?php if(is_single()): ?>
    <?php get_template_part('templates/entry-meta'); ?>
<?php endif; wp_reset_query(); ?>