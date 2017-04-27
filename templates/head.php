<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  
    <?php wp_head(); ?>
    
    <?php if( is_single() ): ?>
    <style>
        #disqus_thread {
            max-width: 600px;
            width: 100%;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        #disqus_thread a {
             color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        header.banner {
            background: <?php echo get_field('piece_color'); ?>;
        }
        
        header.banner a {
            color: #FFF !important;
        }
        header.banner a:hover {
            color: #333 !important;
            cursor: pointer;
        }
        
        .entry-title {
            color: #FFF;
            text-align: center;
            font-size: 65px;
            padding: 30px 0;
        }
        
        .entry-content {
            padding: 30px 15px;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        
        div.time {
            width: 100%;
            text-align: center;
        }
        
        div.time .updated {
            padding-bottom: 10px;
            color: <?php echo get_field('piece_color'); ?>;
            border-bottom: 5px solid <?php echo get_field('piece_color'); ?>;
        }
        
        #top-wrap #to-top:hover {
            color: <?php echo get_field('piece_color'); ?> !important;
        }
        
        footer .copy {
            color: #222;
        }
        
        footer a {
            color: #FFF !important;
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
