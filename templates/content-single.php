<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
        <footer>
            <div class="posted-in">
                Posted in: <?php echo the_category(', '); ?>
            </div>
            <span>Pagination goes here</span>
            <?php wp_link_pages(); ?>
        </footer>
        
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>
