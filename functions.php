<?php 

function calling_resources(){
	wp_enqueue_style('style' , get_stylesheet_uri(), '', '1.0.0' );
	// wp_enqueue_script('test-j1',get_template_directory_uri().'js/custom.js', '', '1.0');

}
add_action('wp_enqueue_scripts' , 'calling_resources');



function out_theme_setup(){
	register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
	'secondary' => __('Second Menu'),
));

} 
add_action('after_setup_theme','out_theme_setup');

add_theme_support('post-thumbnails');

function ourWidget_first(){
	register_sidebar(array(
		'name' => 'Footer Top left_Widget',
		'id' => 'sidebar1',
		'before_widget' => '<div class="column_1">',
		'after_widget' => '</div>',
		'befor_title' => ' <h4 class="font-weight-bold text-white">',
		'after_title' => '</h4>',

	));
	register_sidebar(array(
		'name' => 'Footer Top middle_Widget',
		'id' => 'sidebar2',
		'before_widget' => '<div class="column_1">',
		'after_widget' => '</div>',
		'befor_title' => '<h4 class="font-weight-bold text-white">',
		'after_title' => '</h4>',

	));
	register_sidebar(array(
		'name' => 'Footer Top right_Widget',
		'id' => 'sidebar3',
		'before_widget' => '<div class="column_1">',
		'after_widget' => '</div>',
		'befor_title' => '<h4 class="font-weight-bold text-white">',
		'after_title' => '</h4>',

	));
	register_sidebar(array(
		'name' => 'Footer Top right_Widget_r',
		'id' => 'sidebar4',
		'before_widget' => '<div class="column_1">',
		'after_widget' => '</div>',
		'befor_title' => '<h4 class="font-weight-bold text-white">',
		'after_title' => '</h4>',

	));	
}
add_action('widgets_init','ourWidget_first');