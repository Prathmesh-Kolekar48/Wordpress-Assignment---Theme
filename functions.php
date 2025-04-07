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

    register_nav_menus([
        'footer_product' => __('Footer Product Menu'),
        'footer_resources' => __('Footer Resources Menu'),
        'footer_company' => __('Footer Company Menu'),
    ]);


});

function custom_post_type() {
    register_post_type("products", [
        "labels" => [
            "name" => "Products",
            "singular_name" => "Product",
            "add_new" => "Add New Product",
            "add_new_item" => "Add New Product",
            "edit_item" => "Edit Product",
            "new_item" => "New Product",
            "view_item" => "View Product",
            "search_items" => "Search Products",
            "not_found" => "No Products Found",
            "not_found_in_trash" => "No Products Found in Trash",
            "parent_item_colon" => "Parent Product:",
        ],
        "public" => true,
        "has_archive" => true,
        "show_in_rest" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields"],
        "menu_icon" => "dashicons-products",
    ]);
}

function theme_customize_register($wp_customize) {
    // Section
    $wp_customize->add_section('social_links_section', [
        'title'       => __('Social Links', 'yourtheme'),
        'priority'    => 30,
        'description' => 'Add links to your social media profiles.',
    ]);

    // Facebook
    $wp_customize->add_setting('facebook_url', ['default' => '', 'sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('facebook_url', [
        'label'   => 'Facebook URL',
        'section' => 'social_links_section',
        'type'    => 'url',
    ]);

    // Twitter
    $wp_customize->add_setting('twitter_url', ['default' => '', 'sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('twitter_url', [
        'label'   => 'Twitter URL',
        'section' => 'social_links_section',
        'type'    => 'url',
    ]);

    // LinkedIn
    $wp_customize->add_setting('linkedin_url', ['default' => '', 'sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('linkedin_url', [
        'label'   => 'LinkedIn URL',
        'section' => 'social_links_section',
        'type'    => 'url',
    ]);
}
add_action('customize_register', 'theme_customize_register');

add_action("init", 'custom_post_type');
// add_action("wp_head",function () {

// });
// add_action("wp_footer","");

