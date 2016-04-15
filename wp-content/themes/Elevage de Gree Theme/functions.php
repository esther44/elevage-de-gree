<!--Widgetiser la sidebar (avec 2 colonnes)-->
<?php if (function_exists('register_sidebar')) register_sidebar(2); ?>

<!--Nom du menu choisi dans l'admin wordpress-->
<?php
function register_my_menus()
{
    register_nav_menus(

        array(
            'header-menu' => __('Header Menu'), /*Nom du menu choisi dans l'admin wordpress*/
            'extra-menu' => __('Extra Menu')
        )
    );
}

add_action('init', 'register_my_menus');
?>

<!--Retire la marge de la balise html-->
<?php
add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

?>

<!--bootsrap-->
<?php
function my_scripts_enqueue()
{
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), NULL, 'all');

    wp_enqueue_script('bootstrap-js');
    wp_enqueue_style('bootstrap-css');
}

add_action('wp_enqueue_scripts', 'my_scripts_enqueue');
?>

<?php


function raise_image_size_limit() {
    return -1;
}
add_filter('wp_thumbnail_creation_size_limit','raise_image_size_limit');
;
?>
