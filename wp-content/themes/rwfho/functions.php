<?php


    function rwfho_files() {
        echo get_stylesheet_uri();
        wp_enqueue_style('rwfho_main_style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'rwfho_files'); 


?>