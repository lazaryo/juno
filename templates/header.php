<header class="banner">
    <div class="container">
        <a class="logo" href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/10/logo-primary.png" alt="Malik Hemphill's Logo">
        </a>

        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
        
        <?php if (is_home()) {?>

        <nav class="pushy pushy-right" style="visibility: visible;">
            <ul>
                <li class="title">Sort by</li>
                <li class="pushy-submenu pushy-submenu-closed">
                    <a href="#">Id</a>
                    <ul>
                        <li class="pushy-link"><a class="sort" data-sort="id:asc" href="#">ASC</a></li>
                        <li class="pushy-link"><a class="sort" data-sort="id:desc" href="#">DESC</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu pushy-submenu-closed">
                    <a href="#">Title</a>
                    <ul>
                        <li class="pushy-link"><a class="sort" data-sort="title:asc" href="#">ASC</a></li>
                        <li class="pushy-link"><a class="sort" data-sort="title:desc" href="#">DESC</a></li>
                    </ul>
                </li>
                <li class="pushy-submenu pushy-submenu-closed">
                    <a href="#">Date</a>
                    <ul>
                        <li class="pushy-link"><a class="sort" data-sort="date:asc" href="#">ASC</a></li>
                        <li class="pushy-link"><a class="sort" data-sort="date:desc" href="#">DESC</a></li>
                    </ul>
                </li>
                <li>Filter by</li>
                <li class="pushy-submenu pushy-submenu-closed"><a href="#">Filter by</a>
                    <ul>
                        <li class="pushy-link"><a class="filter active" data-filter="all" href="#">Show All</a></li>
                        <li class="pushy-link"><a class="filter" data-filter=".poem" href="#">Poem</a></li>
                        <li class="pushy-link"><a class="filter" data-filter=".short-story" href="#">Short Story</a></li>
                        <li class="pushy-link"><a class="filter" data-filter=".dream" href="#">Dream</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <?php } ?>
    </div>
</header>