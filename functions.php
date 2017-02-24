<?php
function reamiddletondds_theme_setup(){

	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-width' => true,
	) );
}
add_action('init', 'reamiddletondds_theme_setup');
