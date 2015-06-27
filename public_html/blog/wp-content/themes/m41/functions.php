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
?>