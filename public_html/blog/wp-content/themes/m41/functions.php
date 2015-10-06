<?php

/*
 * register and enqueue theme CSS and javascript
 */

function m41_theme_scripts() {
    /*
     * Styles first (nb. fonts are loaded from theme styles.css)
     */
    // Bootstrap CSS
    wp_enqueue_style('m41_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    // Add clean-blog styles if a blog page
    if (get_post_type() == 'post' or is_home()) {
        wp_enqueue_style('m41_clean_blog', get_template_directory_uri() . '/css/clean-blog.min.css');
    }
    // m41 theme specific styles (mainly overrides)
    wp_enqueue_style('m41_main', get_template_directory_uri() . '/css/main.css');
    /*
     * Javascript
     */
    // Register the scripts
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap'); // enqueue the script:
}

add_action('wp_enqueue_scripts', 'm41_theme_scripts');

/*
 * Add support for menus
 */

function register_my_menu() {
    register_nav_menus(
            array(
                'header-menu' => __('Header Menu')
            )
    );
}

add_action('init', 'register_my_menu');

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker
/*
 * Register a sidebar in theme
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array('name' => 'Sidebar', 'm41'));
}
/*
 * 
 */
add_filter('wp_title', 'm41_hack_wp_title_for_home');

function m41_hack_wp_title_for_home($title) {
    if (empty($title) && ( is_home() || is_front_page() )) {
        return __('Home', 'theme_domain') . ' | ' . get_bloginfo('description');
    }
    return $title;
}

/*
 * Add support for featured Image in posts
 */
add_theme_support('post-thumbnails');
// Image size for single posts 
add_image_size('single-post-header', 920, 410, true);
add_image_size('single-post-thumb', 120, 120, true);


/*
 * Add support for custom header in theme
 */
$defaults = array(
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'width' => 920,
    'height' => 410,
    'flex-height' => false,
    'flex-width' => false,
    'default-text-color' => '',
    'header-text' => true,
    'uploads' => true
);
add_theme_support('custom-header', $defaults);

/*
 * Remove img hieght and width attributes added automatically by wordpress
 * (not used at the moment)
 *
  add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
  add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
  function remove_width_attribute( $html ) {
  $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
  return $html;
  }
 *
 */
?>