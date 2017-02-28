<?php

/*
Plugin Name: WVNET Dashboard
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Easy access to WVNET Support from Admin dashboard
Version: 1.0
Author: Uriah Sypolt
Author URI: http://URI_Of_The_Plugin_Author
License: GPLv2

Copyright 2017  Uriah Sypolt  (email : usypolt@mail.wvnet.edi)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action( 'admin_menu', 'WVNET_admin_support_page' );

function WVNET_admin_support_page() {

	add_menu_page(
		'WVNET Support Page',
		'WVNET Support',
		'manage_options',
		'WVNET_admin_support',
		'WVNET_support_page',
		plugins_url( '/images/wp-icon.png', __FILE__ ),
		0);

	add_submenu_page( WVNET_admin_support, 'About My Plugin', 'About', 'manage_options',
		__FILE__.'_about', boj_menuexample_about_page );


	global $submenu;

	//$submenu['WVNET_admin_support'][1] = array( 'Announcments', 'manage_options' , 'https://chat.wvnet.edu' );
	//$submenu['WVNET_admin_support'][2] = array( 'WVNET Chat', 'manage_options' , 'https://chat.wvnet.edu' );
	//$submenu['WVNET_admin_support'][3] = array( 'Submit OZ ticket', 'manage_options' , 'http://oz.wvnet.edu/ozwvnet/k12/' );

}

// Draw the options page
function WVNET_support_page() {
	?>
	<div class="wrap">
		<h2>My plugin</h2>

	<?php
}
?>
