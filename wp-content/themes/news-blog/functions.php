<?php
define("THEME_PATH", get_template_directory_uri()."/");
function wpnw_theme_styles(){
    wp_enqueue_style( "main_css", THEME_PATH."style.css");
}
add_action("wp_enqueue_scripts", "wpnw_theme_styles");

function wpnw_theme_js(){
    wp_enqueue_script("main_js", THEME_PATH."assets/js/script.js", array('jquery'),"",true);
}
add_action( "wp_enqueue_scripts", "wpnw_theme_js" );

add_theme_support('menus');
add_theme_support('post-thumbnails');

function register_theme_menus(){
    register_nav_menus(array(
        "primary_menus"=> __("Primary Menu"),
       
    ));
}
add_action( "init","register_theme_menus");

function add_li_class($ulClass){
    return preg_replace("/<li/", '<li class="menu__item"', $ulClass);
}
function add_menu_class($ulClass){
    return preg_replace("/<a/", '<a class="menu__link"', $ulClass);
}
add_filter('wp_nav_menu',"add_li_class");
add_filter('wp_nav_menu',"add_menu_class");
?>