<?php
/**
 * 	Theme Name: BAFCOTHAI BUSINESS THEME
 *  Theme URI: http://demo.ideacorners.com/bafcothai
 *  Description: This theme for business style. Copyright 2012, IdeaCorners Developers.
 *  Version: 1.0
 *  Author: IdeaCorners Developer
 *  Author URI: http://www.ideacorners.com
 *
 * @package Business Theme by IdeaCorners Developer
 * @subpackage ic-business
 * @author Business Themes - www.ideacorners.com
 */


/* ### Include Controller ### */
require_once("theme-option-controller/menu-control.php");

add_action('admin_menu', 'remove_links_menu');
function remove_links_menu()
{
//     remove_menu_page('index.php'); // Dashboard
//     remove_menu_page('edit.php'); // Posts
//     remove_menu_page('upload.php'); // Media
     remove_menu_page('link-manager.php'); // Links
     remove_menu_page('edit.php?post_type=page'); // Pages
     remove_menu_page('edit-comments.php'); // Comments
//     remove_menu_page('themes.php'); // Appearance
     remove_menu_page('plugins.php'); // Plugins
//     remove_menu_page('users.php'); // Users
     remove_menu_page('tools.php'); // Tools
//     remove_menu_page('options-general.php'); // Settings
}

add_action('admin_menu', 'adjust_the_wp_menu', 999);
function adjust_the_wp_menu()
{
    $page = remove_submenu_page('themes.php', 'nav-menus.php');
    // $page[0] is the menu title
    // $page[1] is the minimum level or capability required
    // $page[2] is the URL to the item's file
}

/* ### FUNCTION IMAGE THUMBNAIL ### */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions
}

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
    add_image_size( 'homepage-thumb', 220, 180, true ); //(cropped)
    add_image_size( '202x126-thumb', 202, 126, true ); //(cropped)
    add_image_size( '503x160-thumb', 550, 200, true ); //(cropped)
}

add_image_size( '202x126-thumb', 202, 126, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
add_image_size( '503x160-thumb', 503, 160, true ); // 220 pixels wide by 180 pixels tall, hard crop mode
/* ### END:FUNCTION IMAGE THUMBNAIL ### */

?>

