<?php

function Theme_Style(){
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'Theme_Style');