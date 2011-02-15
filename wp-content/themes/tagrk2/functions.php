<?php

define( 'HEADER_IMAGE_WIDTH', 960 );
define( 'HEADER_IMAGE_HEIGHT', 152 ); 

/* does not seem to work, used design -> k2 options instead
define('CONCATENATE_SCRIPTS', true);
define('COMPRESS_SCRIPTS', true); 
*/


/* MENUES: top (old filters), top left, top right */


function register_tagr_menus() {
register_nav_menus(
array(
'Filtermenu' => __( 'Main Menu (alte Filter)' ),
'menu_left' => __( 'Menu Left (about..)' ),
'menu_right' => __( 'Menu Right (timelines..)' )
)
);
}

add_action( 'init', 'register_tagr_menus' );


/* overwriting k2 menu - attention: /themes/k2/header.php  */

function k2_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
} 
add_filter( 'wp_page_menu_args', 'k2_page_menu_args' ); 

?>
