<?php


function caprera_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style( 'caprera-style', get_template_directory_uri() . '/style.css', array(), $version, 'all' );
    wp_enqueue_style( 'caprera-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all' );
    wp_enqueue_style( 'caprera-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all' );
   
}

add_action( 'wp_enqueue_scripts', 'caprera_register_styles' );

function caprera_register_scripts(){

    wp_enqueue_script( 'caprera-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true );
    wp_enqueue_script( 'caprera-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true );
    wp_enqueue_script( 'caprera-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true );
    wp_enqueue_script( 'caprera-main', get_template_directory_uri() . "/asssets/js/main.js", array(), '3.4.1', true );


}

add_action( 'wp_enqueue_scripts', 'caprera_register_scripts' );


?>