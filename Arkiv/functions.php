<?php 

//Remove adminpanel
add_filter('show_admin_bar', '__return_false');

//Create Nav Menu
if (function_exists('register_nav_menus')) {
	register_nav_menus (array('primary' => 'Header Navigation'));
}


//Post Thumbnails
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
}

if (function_exists('add_image_size')) {
	add_image_size('featured', 500, 500, true);
	add_image_size('fullsize', 2000, 1000, true);
}










