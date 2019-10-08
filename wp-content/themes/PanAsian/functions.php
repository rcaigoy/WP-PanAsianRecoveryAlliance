<?php

function Theme_Style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'Theme_Style');


function story_post_types(){
  // Storie Post Type
  register_post_type('story', array(
		'supports' => array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail'),
		'rewrite' => array('slug' => 'stories'),
    'has_archive' => true,
    'public' => true,
		'label' => 'Stories',
    'menu_icon' => 'dashicons-calendar'
  ));
}
add_action('init', 'story_post_types');

/*
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'stories' ) );
    return $query;
}
*/
