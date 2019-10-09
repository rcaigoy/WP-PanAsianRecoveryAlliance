<?php

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
