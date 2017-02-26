<?php 
/*
Plugin Name: Private Community For BP Lite
Plugin URI: http://wordpress.org/plugins/private-community-for-bp-lite
Description: Makes BP pages private and only accessable to logged in users with the exception
of the posts/pages you set in Dashboard/Settings/PrivateCommunityBP. 
Blocks RSS feeds to logged out visitors.
Version: 4.0
Requires at least: 3.2.1
Tested up to: 3.6.1 
License: GNU/GPL 2
Author: bphelp
Author URI: http://bphelpblog.wordpress.com/
*/

/*** Make sure BuddyPress is loaded ********************************/
function private_community_for_bp_lite_bp_check() {
    if ( !class_exists( 'BuddyPress' ) ) {
	add_action( 'admin_notices', 'private_community_for_bp_lite_install_buddypress_notice' );
    }
}
add_action('plugins_loaded', 'private_community_for_bp_lite_bp_check', 999);

function private_community_for_bp_lite_install_buddypress_notice() {
	echo '<div id="message" class="error fade"><p style="line-height: 150%">';
	_e('<strong>Private Community For BP Lite</strong></a> requires the BuddyPress plugin to work. Please <a href="http://buddypress.org/download">install BuddyPress</a> first, or <a href="plugins.php">deactivate Private Community For BP Lite</a>.');
	echo '</p></div>';
}

function private_community_for_bp_lite_init() {
	require( dirname( __FILE__ ) . '/private-community-for-bp-lite.php' );
}
add_action( 'bp_include', 'private_community_for_bp_lite_init' );
?>