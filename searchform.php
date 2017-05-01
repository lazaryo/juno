<div class="search-area" style="color: white; padding: 5px 10px;">
    <p class="search-title">Search <i class="search-icon fa fa-search"></i></p>
    <form role="search" method="get" class="off-canvas-search" action="<?php echo home_url( '/' ); ?>">
        <input type="search" class="search-field" placeholder="search" value="<?php echo get_search_query() ?>" name="s">
        <div class="search-button"><input type="submit" value="search"></div>
    </form>
</div>
