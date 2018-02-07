<?php

//Loading css and js
function theme_add_bootstrap() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap' );

    wp_enqueue_style( 'main', get_template_directory_uri() . 'style.css');
    wp_enqueue_style( 'main' );

    wp_enqueue_script( 'jquery', 'http://code.jquery.com/jquery-1.11.0.min.js', false,'1.11.0', true);
     wp_enqueue_script ('bootstrap-scripts', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', false, '3.2.0', true);
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap');




//Theme setup

function Photog_setup() {

//Add feature image
 add_theme_support('post-thumbnails');
 add_image_size('small-thumbnail', 400, 800);
 add_image_size('big-photo', 9999, 1000);

//Add post format support
 add_theme_support('post-formats', array('image', 'link', 'aside'));
 add_theme_support('html5', array('search-form'));

//Register navigation
 register_nav_menus(array(

 'primary' => __( 'Top Menu', 'bootpress' ),

 ));


}

add_action('after_setup_theme', 'Photog_setup');

