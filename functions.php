<?php

function load_stylesheets()
{
	/* Bulma CSS Framework Declaration */
	wp_register_style('bulma', get_template_directory_uri() . '/css/bulma.min.css', array(), false, 'all');
	wp_enqueue_style('bulma');

	/* Style.css Declaration */
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');