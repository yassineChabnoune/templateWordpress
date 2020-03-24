

<?php
///enable menu options

add_theme_support('menus');

//REGISTER MENU
function set_menu_areas()
{
    register_nav_menu('main-menu','Primary Menu');
}
add_action('init','set_menu_areas');


    ?>