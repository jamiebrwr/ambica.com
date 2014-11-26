<?php
/**
 * Create WP Developer Role
 *
 * Creates WP Developer role upon activation of the plugin.
 */

CLASS SRH_ROLES
{
	function srh_add_roles_on_plugin_activation() {
	$result = add_role(
		'srh_wp_developer',
		__( 'WP Developer' ),
			array(
				'activate_plugins'			=> true,  // true allows this capability
				'delete_others_pages'		=> true,
				'delete_others_posts'		=> true,
				'delete_pages'				=> true,
				'delete_plugins'			=> true,
				'delete_posts'				=> true,
				'delete_private_pages'		=> true,
				'delete_private_posts'		=> true,
				'delete_published_pages'	=> true,
				'delete_published_posts'	=> true,
				'edit_dashboard'			=> true,
				'edit_files'				=> true,
				'edit_others_pages'			=> true,
				'edit_others_posts'			=> true,
				'edit_pages'				=> true,
				'edit_posts'				=> true,
				'edit_private_pages'		=> true,
				'edit_private_posts'		=> true,
				'edit_published_pages'		=> true,
				'edit_published_posts'		=> true,
				'edit_theme_options'		=> true,
				'export'					=> true,
				'import'					=> true,
				'list_users'				=> true,
				'manage_categories'			=> true,
				'manage_links'				=> true,
				'manage_options'			=> true,
				'moderate_comments'			=> true,
				'promote_users'				=> true,
				'publish_pages'				=> true,
				'publish_posts'				=> true,
				'read_private_pages'		=> true,
				'read_private_posts'		=> true,
				'read'						=> true,
				'remove_users'				=> true,
				'switch_themes'				=> true,
				'upload_files'				=> true,
				//Additional Admin Capabilities
				'update_core'				=> true,
				'update_plugins'			=> true,
				'update_themes'				=> true,
				'install_plugins'			=> true,
				'install_themes'			=> true,
				'delete_themes'				=> true,
				'edit_plugins'				=> true,
				'edit_themes'				=> true,
				'edit_users'				=> true,
				'create_users'				=> true,
				'delete_users'				=> true,
				'unfiltered_html'			=> true,
			)
		);
}
	register_activation_hook( __FILE__, 'srh_add_roles_on_plugin_activation' );
	
	//Removes the WP Developer role from WordPress.
	//remove_role( 'srh_wp_developer' );
	
	/**
	 * Remove capabilities from administrators.
	 *
	 * Call the function when your plugin/theme is activated.
	 */
	function wpcodex_set_capabilities() {
	
	    // Get the role object.
	    $administrator = get_role( 'administrator' );
	
		// A list of capabilities to remove from administrators.
	    $caps = array(
			'edit_themes'	=> false,
	    );
	
	    foreach ( $caps as $cap ) {
	    
	        // Remove the capability.
	        $administrator->remove_cap( $cap );
	    }
	}
	add_action( 'init', 'wpcodex_set_capabilities' );
}