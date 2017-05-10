<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
    'lib/assets.php',    // Scripts and stylesheets
    'lib/extras.php',    // Custom functions
    'lib/setup.php',     // Theme setup
    'lib/titles.php',    // Page titles
    'lib/wrapper.php',   // Theme wrapper class
    'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);


function extra_profile_fields( $user ) {
?>
	<h3><?php _e('Extra Fields', 'extra_fields'); ?></h3>
	
	<table class="form-table">
		<tr>
			<th>
				<label for="address"><?php _e('Address', 'address_field'); ?>
			</label></th>
			<td>
				<input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description"><?php _e('Please enter your address.', 'address_field'); ?></span>
			</td>
		</tr>
	</table>
<?php }

function save_extra_fields( $user_id ) {
	
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;
	
	update_usermeta( $user_id, 'address', $_POST['address'] );
}

add_action( 'show_user_profile', 'extra_profile_fields' );
add_action( 'edit_user_profile', 'extra_profile_fields' );

add_action( 'personal_options_update', 'save_extra_fields' );
add_action( 'edit_user_profile_update', 'save_extra_fields' );

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');
