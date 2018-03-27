<?php
/*
Plugin Name: Webfont Aileron
Plugin URI: https://github.com/eracom/webfont-aileron
Description: Extension permettant de charger la fonte Aileron.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/eracom/webfont-aileron
*/
 
function load_aileron_webfont() {
	
	wp_enqueue_style( 'aileron-font', plugin_dir_path( __FILE__ ).'/aileron/webfont.css' );
        
}
add_action( 'wp_enqueue_scripts', 'load_aileron_webfont', 11 );