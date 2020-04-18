<?php


    function rwfho_files() {
        wp_enqueue_style('rwfho_main_style', get_stylesheet_uri());
        wp_enqueue_style('rwfho_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    }
    add_action('wp_enqueue_scripts', 'rwfho_files'); 


?>