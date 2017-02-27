<?php

/*
Plugin Name: Wvnet Dashboard
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Uriah Sypolt
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/


function wpdocs_register_my_custom_menu_page() {
	add_menu_page(
		'WVNET Support',
		'custom menu',
		'manage_options',
		'myplugin/myplugin-admin.php',
		'',
		plugins_url( 'myplugin/images/icon.png' ),
		0
	);
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );


