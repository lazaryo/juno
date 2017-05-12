<footer>
    <div class="posted-in">
        Posted in: <?php echo the_category(', '); ?>
    </div>
    
    <div class="navigation">
        <?php previous_post_link( '<div class="prev"><i class="fa fa-arrow-left"></i>%link</div>' ); ?>
        <?php next_post_link( '<div class="next">%link<i class="fa fa-arrow-right"></i></div>' ); ?> 
    </div>
</footer>