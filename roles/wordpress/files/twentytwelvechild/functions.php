<?php
/*function twentytwelve_customize_preview_js() {
	wp_enqueue_script( 'twentytwelve-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
	}*/
add_action( 'customize_preview_init', 'twentytwelve_customize_preview_js' );

function redirect2profile(){
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if($_SERVER['REQUEST_URI'] == '/profile/' && is_plugin_active('buddypress/bp-loader.php') && is_user_logged_in()){
		global $current_user;
		wp_redirect( get_bloginfo('url') . '/members/'. $current_user->user_login . '/profile/');
		exit();
	}
 }

add_action('init', 'redirect2profile');

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

function copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; " . $copyright_dates[0]->firstdate;
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate . " Friends of Bedlam";
}
$output = "Copyright " .  $copyright;
}
return $output;
}

//Add login/logout link to naviagation menu
function add_login_out_item_to_menu( $items, $args ){

	//change theme location with your them location name
	if( is_admin() ||  $args->theme_location != 'primary' )
		return $items;

	$redirect =( is_home() ) ? false : get_permalink();
	if( is_user_logged_in( ) )
		$link = '<a href="' . wp_logout_url( $redirect ) . '" title="' .  __( 'Logout' ) .'">' . __( 'Logout' ) . '</a>';
	else  $link = '<a href="' . wp_login_url( $redirect  ) . '" title="' .  __( 'Login' ) .'">' . __( 'Login' ) . '</a>';

	return $items.= '<li id="log-in-out-link" class="menu-item menu-type-link">'. $link . '</li>';
}add_filter( 'wp_nav_menu_items', 'add_login_out_item_to_menu', 50, 2 );

if ( ! function_exists( 'dropdown_menu' ) )
    include( 'dropdown-menus/dropdown-menus.php' );

function _remove_script_version( $src ){
$parts = explode( '?', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
?>
