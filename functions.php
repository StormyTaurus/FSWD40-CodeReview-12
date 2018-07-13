<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// activate thumbnails setting in wp-dashboard
add_theme_support('post-thumbnails');


// register the navigation menu and activate in wp-dashboard
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
));


// Excerpt length control
function set_excerpt_length() {
	return 50;
}
add_filter('excerpt_length', 'set_excerpt_length');


// widget activation
function wpb_init_widgets($id) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}
add_action('widgets_init', 'wpb_init_widgets');

?>