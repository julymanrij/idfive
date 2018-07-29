<?php
function idfive_styles_enqueue(){
  // wp_register_style('print', get_template_directory_uri() . '/css/print.min.css', array(), '1.0', 'all');
  // wp_enqueue_style('print');
  wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(), '1.0', 'all');
  wp_enqueue_style('styles');
}
function idfive_scripts_enqueue(){
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.0', true);
  wp_enqueue_script('jquery');
  wp_register_script('main', get_template_directory_uri() . '/js/build/main.min.js', array(), '1.0', true);
  wp_enqueue_script('main');
  wp_register_script('site', get_template_directory_uri() . '/js/build/site.min.js', array(), '1.0', true);
  wp_enqueue_script('site');
}


// Add Actions
add_action('wp_enqueue_scripts', 'idfive_styles_enqueue');
add_action('wp_enqueue_scripts', 'idfive_scripts_enqueue');

function idfive_setup() {

	add_theme_support('menus');

	register_nav_menu('nav-main', 'Primary Header Navigation');
	register_nav_menu('nav-quick', 'Top Header Navigation');
	register_nav_menu('secondary-main', 'Footer Navigation');
	register_nav_menu('nav-action', 'Secondary footer Navigation');
	register_nav_menu('nav-legal', 'Legal footer Navigation');
	register_nav_menu('nav-social', 'Social footer Navigation');

}
add_action('init', 'idfive_setup');
