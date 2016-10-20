<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="http://localhost:3000/local_blog/wp-content/themes/juno/dist/styles/materialize.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="http://localhost:3000/local_blog/wp-content/themes/juno/dist/scripts/materialize.min.js"></script>
    <script type="text/javascript">
        $(function(){
            if($('body').hasClass('blog')) {
                $('body').attr('id', 'container');
            } 
        });
    </script>
    <style>
        body {
            background-color: <?php if (is_single()){echo get_field('piece_color');} ?>;
        }
        
        a {
            color: <?php if (is_single()){echo get_field('piece_color');} ?> !important;
        }
    </style>
</head>
