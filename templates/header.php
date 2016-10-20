<header class="banner">
    <div class="container">
        <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/10/logo-primary.png" alt="Malik Hemphill's Logo">
        </a>

        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        
        
        <?php if (is_home()) {?>
            <!-- add sorting menu here -->
        <?php } else { ?>
            <!-- add for single posts here -->
        <?php } ?>
    </div>
</header>