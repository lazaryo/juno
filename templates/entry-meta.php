<div class="entry-meta">
    <time class="time" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time> | 
    <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="author"><?= get_the_author(); ?></a>
</div>