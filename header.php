<!DOCTYPE html> 
<head>
<html>

<title><?php get_my_title_tag();?></title>

<meta name="description" content="<?php echo get_the_excerpt();?>"/>
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles.css">
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/flexslider.css"  />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
<!-- End Toggle Menu -->
<!-- Start WP head -->
<?php wp_head();?>
<!-- End WP head -->
</head>
<body <?php body_class();?>>
<div id="navbar">
 <a href="http://tina-au.com/wordpress/">
  <img src="<?php bloginfo('template_directory'); ?>/images/navbar.png" style="width:50px;">
</a>
<!-- Begin new navigation-->
<?php wp_nav_menu(array('the_location' => 'cssmenu','container_id' => 'cssmenu'));?>
<!--End New Navigation-->
