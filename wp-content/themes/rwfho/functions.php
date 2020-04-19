<?php


    function rwfho_files() {
        wp_enqueue_style('rwfho_main_style', get_stylesheet_uri());
        wp_enqueue_style('rwfho_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    }
    add_action('wp_enqueue_scripts', 'rwfho_files'); 


?>