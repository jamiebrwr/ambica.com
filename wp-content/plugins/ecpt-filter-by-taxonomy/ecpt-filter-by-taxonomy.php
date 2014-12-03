<?php
/*
Plugin Name: Easy Content Types: Filter By Taxonomy
Plugin URI: http://pippinsplugins.com/ecpt-filter-by-taxonomy-add-on/
Description: Allows you to filter your post list in the WordPress admin by custom taxonomies registered with Easy Content Types
Author: Pippin Williamson
Author URI: http://pippinsplugins.com
Version: 1.0.3
*/

/******************************************************
* plugin prefix = ecpt_fbt_
******************************************************/



// displays a message if ECPT not active or is below the required version
function ecpt_fbt_plugin_version_notice()
{
	// not sure the is_admin check is necessary, but just to be safe because get_plugin_data is only avail in admin
	if(is_plugin_active('easy-content-types/easy-content-types.php')) {
	  	$ecpt = get_plugin_data(WP_PLUGIN_DIR . '/easy-content-types/easy-content-types.php');
		if( $ecpt['Version'] < '2.3.5' ) {
	
			$message = __('Your copy of Easy Content Types is below the required version. Please upgrade.', 'ecpt');
			echo '<div id="message" class="error"><p><strong>' . $message . '</strong></p></div>';
		}
	} else {
		$message = __('This plugin requires Easy Content Types. You Can download it from <a href="http://codecanyon.net/item/easy-custom-content-types-for-wordpress/234182?ref=mordauk">Code Canyon</a>', 'ecpt');
		echo '<div id="message" class="error"><p><strong>' . $message . '</strong></p></div>';
	}
}
add_action('admin_notices', 'ecpt_fbt_plugin_version_notice');

// registers each of the taxonomy filter drop downs
function ecpt_fbt_add_taxonomy_filters() {
	global $typenow; 			// the current post type
	global $wpdb;
	global $ecpt_db_tax_name;	// the name of the ECPT taxonomy database
	
	foreach( $wpdb->get_results("SELECT * FROM " . $ecpt_db_tax_name . " WHERE page LIKE '%" . $typenow . "%' AND enable_filter=1;") as $key => $tax) {
	
		$filters = array($tax);
		foreach ($filters as $tax) {
			$terms = get_terms($tax->name);
			if(count($terms) > 0) {
				$slug = $tax->name;
				echo "<select name='$slug' id='$slug' class='postform'>";
				echo "<option value=''>Show All $tax->plural_name</option>";
				foreach ($terms as $term) {
					$selected = isset( $_GET[$tax->name] ) ? $term->slug : '';
					echo '<option value="' . $term->slug . '"' . selected( $selected, $term->slug, false ) . '>' . $term->name .' (' . $term->count .')</option>';
				}
				echo "</select>";
			}
		}
	}
}
add_action( 'restrict_manage_posts', 'ecpt_fbt_add_taxonomy_filters', 100 );