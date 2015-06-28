<?php
if(function_exists('register_sidebar')) register_sidebar(array('name'=>'Sidebar',));

add_filter( 'wp_title', 'm41_hack_wp_title_for_home' );
function m41_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}


/*
 * Add support for featured Image im posts
 */
add_theme_support( 'post-thumbnails' );
// Image size for single posts 
add_image_size( 'single-post-header', 920, 410, true );
add_image_size( 'single-post-thumb', 120, 120, true );


/*
 * Add support for custom header in theme
 */
$defaults = array(
	'default-image'          => get_template_directory_uri() . '/images/header.jpg',
	'width'                  => 920,
	'height'                 => 410,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true
);
add_theme_support ('custom-header', $defaults);

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