<?php
    // creates and defines a function to be able to use the custom css, js, fonts
    function austere_files() {
        wp_enqueue_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('austere_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'austere_files');

    function university_features() {
        add_theme_support('title-tag');
        register_nav_menu('header_menu_location', "Header Menu Location");
        register_nav_menu('footer_menu_location1', "Footer Menu Location 1");
        register_nav_menu('footer_menu_location2', "Footer Menu Location 2");
    }

    add_action('after_setup_theme', 'university_features');