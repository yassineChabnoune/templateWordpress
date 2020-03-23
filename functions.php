<?php 
///ENABLE MENU OPTIONS

add_theme_support( 'menus' );

//REGISTER MENU
function set_menu_areas()
{
	register_nav_menu( 'main-menu' , 'primary-menu' );
}
add_action( 'init', 'set_menu_areas')
 ?>
