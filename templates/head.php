<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <?php wp_head(); ?>
    <style>
        /* Patten Background */
        div.juno-wrap {
            background: url('<?= get_template_directory_uri(); ?>/dist/images/dust.png');
        }
    </style>
    
    <?php if( is_home() ): ?>
    <style>
        /* home styles go here if they can't go into the scss files */
    </style>
    
    <?php elseif( !is_single() && !is_home() ): ?>
    <style>
        .page-header {
            <?php
            // check to see if the bg image exists and add it to the header
            if ( get_theme_mod( 'page_header_bg_image' ) ) : ?>
                background: url('<?php echo get_theme_mod( 'page_header_bg_image' ); ?>');
            <?php else: // add a fallback if the bg image doesn't exist ?>
                background: lightgrey;
            <?php endif; ?>
            /* background: url('<?= get_template_directory_uri(); ?>/dist/images/space-bg.jpg'); */
            -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
            filter: grayscale(100%);
        }
    </style>
    
    <?php else: ?>
    <style>
        .page-header.just-color {
             background: <?php echo get_field('piece_color'); ?>; 
        }
        
        .page-header.with-featured {
             background: url('<?php echo get_the_post_thumbnail_url(); ?>'); 
        }
        
        #disqus_thread a {
             color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        .entry-meta {
            border-bottom: 5px solid <?php echo get_field('piece_color'); ?>;
        }
        
        .entry-meta .author {
            color: <?php echo get_field('piece_color'); ?>;
        }
        
        #top-wrap #to-top:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        footer a {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        footer a:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        .off-canvas a:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        body.single-post .post footer .posted-in a {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
    </style>
    <?php endif; wp_reset_query(); ?>
</head>
