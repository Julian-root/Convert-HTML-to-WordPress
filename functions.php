<?php

function load_js_scripts() {
    wp_enqueue_script('my-js1', get_template_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script('my-js2', get_template_directory_uri() . '/js/jquery.dropotron.min.js', array('my-js1'));
    wp_enqueue_script('my-js3', get_template_directory_uri() . '/js/skel_layers.min.js', array('my-js2'));
    wp_enqueue_script('my-js4', get_template_directory_uri() . '/js/skel.min.js', array('my-js3'));
    wp_enqueue_script('my-js5', get_template_directory_uri() . '/js/init.js', array('my-js4') );



    wp_enqueue_style('my-css2', get_template_directory_uri() . '/css/skel.css');
    wp_enqueue_style('my-ccs1', get_theme_file_uri('/style.css'), array('my-css2'));
    wp_enqueue_style('my-css3', get_template_directory_uri() . '/css/style-desktop.css', array('my-ccs1'));

}

add_action('wp_enqueue_scripts', 'load_js_scripts');