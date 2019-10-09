<?php

function Theme_Style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'Theme_Style');

add_action('pre_get_posts', 'my_change_sort_order');
function my_change_sort_order($query){
	if (is_archive()):
		$query->set('order','ASC');
	endif;
};
