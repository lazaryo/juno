<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <a href="<? the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
            <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
<!--        <div id="disqus_thread"></div>-->
        <footer>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
    </article>
<?php endwhile; ?>