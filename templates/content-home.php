<?php
$i = 1;
    //Open the row div
    echo '<div class="row">';
?>
        <?php if( have_posts() ): ?>

        <?php while( have_posts() ): the_post(); ?>
<div class="row">
    <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image" style="display:block;background-color:<?php $value = get_field('piece_color'); echo $value; ?>">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
	    <div id="post-<?php echo get_the_ID(); ?>" <?php post_class('col-md-3'); ?>>
        <div class="piece-banner" style="background-color:<?php $value = get_field('piece_color'); echo $value; ?>"></div>
        <a href="<?php the_permalink(); ?>" class="piece-title"><?php the_title(); ?></a>
        <a href="<?php echo get_author_posts_url(get_the_author_meta(ID)); ?>" rel="author" class="piece-author">
            <?php echo get_the_author(); ?>
        </a> 

		
		<div class="piece-date"><?php $value = get_field('piece_date'); echo $value . '<br><br>'; ?></div>
            <div class="piece-cats"><?php echo( get_the_category_list(', ') ); ?></div>
            <a href="<?php the_permalink(); ?>">visit page</a>

            </div><!-- /#post-<?php echo get_the_ID(); ?> -->
<?php
            // After 4 close the row div and open a new one
            if($i % 4 == 0) {echo '</div><div class="row">';}
        ?>
        <?php $i++; endwhile; ?>

<!--
		<div class="navigation">
			<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span>
			<span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
		</div> /.navigation 
-->
<?php echo '</div>'; ?>
	<?php else: ?>

		<div id="post-404" class="noposts">

		    <p><?php _e('None found.','example'); ?></p>

	    </div><!-- /#post-404 -->

	<?php endif; wp_reset_query(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

<?php echo '</div>'; ?>
