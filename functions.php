<?php
add_action('wp_enqueue_scripts', 'wilcityChildThemeScripts');
function wilcityChildThemeScripts(){
	$oTheme = wp_get_theme();
	wp_enqueue_style('wilcity-parent', get_template_directory_uri() . '/style.css', array(), $oTheme->get( 'Version' ));
	wp_enqueue_style('wilcity-child', get_stylesheet_directory_uri() . '/style.css', array(), '1.0');
	wp_enqueue_script('wilcity-child', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true);
}
