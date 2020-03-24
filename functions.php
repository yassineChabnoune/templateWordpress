<?php 
///ENABLE MENU OPTIONS

add_theme_support( 'menus' );

//REGISTER MENU
function set_menu_areas()
{
	register_nav_menu( 'main-menu' , 'Primary-menu' );
	register_nav_menu( 'footer-menu' , 'Footer-menu' );
};
add_action( 'init', 'set_menu_areas');
//REGISTER SIDEBAR
register_sidebar( array(
	'id' => 'right-sidebar',
	'name' => 'Right Sidebar',
	'before_widget' => '<div class="the-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
) );
 ?>
