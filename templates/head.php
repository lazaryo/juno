<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  
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
            /* background: <?php echo get_field('piece_color'); ?>; */
            /* background: url('<?= get_template_directory_uri(); ?>/dist/images/lana-del-rey-music-to-watch-boys-to.gif'); */
            /* background: url('<?= get_template_directory_uri(); ?>/dist/images/lana-del-rey-love.gif'); */
            background: lightgrey;
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
        
        footer a:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        .off-canvas a:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
    </style>
    <?php endif; wp_reset_query(); ?>
</head>
