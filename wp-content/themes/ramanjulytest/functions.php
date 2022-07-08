<?php
function hello(){
echo "Hello wordpress function";
}

function load_stylesheet(){
    wp_register_style( 'style', get_template_directory_uri().'/assets/css/main.css', array(),1,'all' );
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts','load_stylesheet' );

function load_js(){
    wp_register_script( 'jQuery_min' , get_template_directory_uri().'/assets/js/jquery.min.js',array(),1,1,1);
    wp_enqueue_script('jQuery_min');

    wp_register_script('jQuery_scrolly', get_template_directory_uri().'/assets/js/jquery.scrolly.min.js',1,1,1);
    wp_enqueue_script('jQuery_scrolly');

    wp_register_script('jQuery_scrollex', get_template_directory_uri().'/assets/js/jquery.scrollex.min.js',1,1,1);
    wp_enqueue_script('jQuery_scrollex');

    wp_register_script('jQuery_skel', get_template_directory_uri().'/assets/js/skel.min.js',1,1,1);
    wp_enqueue_script('jQuery_skel');

    wp_register_script('jQuery_util', get_template_directory_uri().'/assets/js/util.js',1,1,1);
    wp_enqueue_script('jQuery_util');

    wp_register_script('jQuery_main', get_template_directory_uri().'/assets/js/main.js',1,1,1);
    wp_enqueue_script('jQuery_main');
}
add_action('wp_enqueue_scripts','load_js');




?>
