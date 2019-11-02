<?php

/* REGISTERS JAVASCRIPT FILES */
wp_register_script('typetester',get_template_directory_uri().'/js/typetester.js');
wp_register_script('scripts',get_template_directory_uri().'/js/scripts.js');

/* CALLS JAVASCRIPT FILES */

wp_enqueue_script('scripts');
wp_enqueue_script('typetester');

// Initializes Navigation Menus
function register_my_menus() { 
    register_nav_menus(
        array(
            'primary-nav' => __( 'Primary Navigation' ),
            'secondary-nav' => __( 'Secondary Navigation' ),
            'mobile-nav' => __( 'Mobile Navigation')
        )
    );
}

add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' );




?>



