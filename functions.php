<?php 
///ENABLE MENU OPTIONS

add_theme_support( 'menus' );

//ENABLE FEATURED THEME

add_theme_support( 'post-thumbnails' );

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



function word_work(){
    wp_enqueue_script('jquery',get_theme_file_uri('js/jquery-3.4.1.min.js',NULL,'3.1.1',true));
    wp_enqueue_script('js',get_theme_file_uri('js/js.js',NULL,'3.1.1',true));
    wp_enqueue_style('style_css',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','word_work');

 ?>
