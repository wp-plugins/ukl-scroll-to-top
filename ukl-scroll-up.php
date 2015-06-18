<?php 
/*
Plugin Name:ukl Scroll Up
Plugin URI: http://www.luckypinky.site50.net/New-Plugin
Description: This plugin will add scroll to top button on footer right in your wordpress site. 
Author:Umme Kulsum Lucky 
Author URI: http://www.luckypinky.site50.net
Version: 1.0
*/


/* Adding Latest jQuery from Wordpress */
function lucky_scroll_up_latest_jquery_from_wp() {
	wp_enqueue_script('jquery');
}
add_action('init', 'lucky_scroll_up_latest_jquery_from_wp');


/*Some Set-up*/
define('LUCKY_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

wp_enqueue_script('lucky-jquery-easing', LUCKY_PLUGIN_URL.'js/jquery.easing.min.js', array('jquery'));
wp_enqueue_script('lucky-jquery-main-scroll-up', LUCKY_PLUGIN_URL.'js/jquery.scrollUp.min.js', array('jquery'));
wp_enqueue_script('lucky-jquery-active', LUCKY_PLUGIN_URL.'js/active.js', array('jquery'));



wp_enqueue_style('lucky-scroll-plugin-css', LUCKY_PLUGIN_URL.'css/style.css');





?>