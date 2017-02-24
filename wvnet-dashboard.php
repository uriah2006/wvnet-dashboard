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

$page_title="WVNET Support Page";
$menu_title="WVNET Support Page";
$menu_slug="wvnetsupport";

add_dashboard_page( $page_title, $menu_title, $capability, $menu_slug, $function = 'chat' );

function chat (){

}