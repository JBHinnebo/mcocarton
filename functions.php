<?php

function mcocarton_srcipt_enqueue() {

    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css', array(),'4.0','all');
    wp_enqueue_style('normalize',get_template_directory_uri().'/css/normalize.min.css',array(), '2.0','all');
    wp_enqueue_style('main',get_template_directory_uri().'/css/main.css', array(), '1.0','all');
    wp_enqueue_style('mcocartoncss',get_template_directory_uri().'/css/mcocarton.css', array(), '1.0','all');
    wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Baloo+Tamma|Days+One|Laila' );
    wp_enqueue_style('font-awesome-4_6_3_css', get_template_directory_uri() .'/font-awesome-4.6.3/css/font-awesome.min.css');
    wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr-2.8.3-respond-1.4.2.min.js',array(), '1.4',true);
    wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(), '4.0',false);

}


add_action('wp_enqueue_scripts', 'wpt_theme_styles' );


function wpt_theme_js(){

	wp_enqueue_script ('main_js', get_template_directory_uri() .'/js/main.js','','', false );
   	wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr-2.8.3-respond-1.4.2.min.js',array(), '1.4',true);
    	wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(), '4.0',false);

}


add_action('wp_enqueue_scripts', 'mcocarton_srcipt_enqueue');

function mcocarton_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
}
add_action('init', 'mcocarton_theme_setup');
