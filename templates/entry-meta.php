<div class="row">
    <p class="col-md-12 exist"><b><em>Written on: </em></b> <?php echo get_field('piece_date'); ?></p>
    <p class="col-md-12 byline author vcard"><b><em><?= __('From the mind of:', 'sage'); ?></em></b> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author_meta('display_name'); ?></a></p>
    <p class="col-md-12 single-categories"><b><em>Tags: </em></b><?php echo( get_the_category_list(', ') ); ?></p>
</div>
