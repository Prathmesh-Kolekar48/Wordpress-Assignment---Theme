<?php

add_action("wp_enqueue_scripts",function() {
    wp_enqueue_style("main",get_stylesheet_directory_uri()."/assets/css/main.css", array('font-awesome','google-font-inter','google-font-dm-sans'));
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-font-inter', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
    wp_enqueue_style('google-font-dm-sans', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900&display=swap');
    wp_enqueue_script('toggle', get_stylesheet_directory_uri() . '/assets/js/toggle.js');
    
});

add_action("after_setup_theme",function() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_theme_support("custom-header");
});

add_action("init",function() {
    register_nav_menus(array(
        "primary" => "Primary Menu",
    ));
});

// add_action("wp_head",function () {

// });
// add_action("wp_footer","");
