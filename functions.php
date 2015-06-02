<?php


/*
Theme Name: Aurem Theme
Theme URI: http://wordpress.org/themes/auremtheme
Author: the WordPress team
Author URI: http://wordpress.org/
Description: Aurem Themes
Version: 1.0
License: GNU General Public License v2 or later
License URI: tina-au.com/wordpress
Tags: black, Grey, Blue, white, flexslider
Text Domain: Aurem Theme
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

// Register My Sidebar
register_sidebar(array(
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
//

//Register My Menus
 register_nav_menus( array(
  'main-menu' => __('Main'),
  ));
//

// enabled featured images & post thumbnails
add_theme_support('post-thumbnails');
//

//get my excerpts//
add_post_type_support('page', 'excerpt');
//ends it//

global $post;

function get_my_title_tag() {
	
if (is_front_page ()) {
	
	bloginfo('description');
	
}

else if ( is_page() | is_single()) {
	the_title();
}

else {
	bloginfo('description');
}


if($post->post_parent) {
	echo '|';
	echo get_the_title($post->post_parent);
}


	echo ' | ';
	bloginfo('name'); 
	echo ' | ';
	echo 'Seattle, WA';

}
//doneee//	

?>
