<?php
    $value = get_field( "piece_color" );
    $value2 = get_field( "piece_date" );

if( $value ) {
    
    echo 'Piece Color: ' . $value;
    echo '<br><br>';

} else {

    echo 'empty color';
    echo '<br><br>';
    
}
if( $value2 ) {
    
    echo 'Piece Date: ' . $value2;
    echo '<br><br>';

} else {

    echo 'empty date';
    echo '<br><br>';
    
}

?>

<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br><br>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
