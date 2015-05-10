<!DOCTYPE html> 
<head>
<html>
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles.css">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
<!-- End Toggle Menu -->
<!-- Start WP head -->
<?php wp_head();?>
<!-- End WP head -->
</head>
<body <?php body_class();?>>
<div id="navbar"><a href="http://tina-au.com/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/images/navbar.png" style="width:50px;"></a></div>

<!--<div id='cssmenu'>
<ul>
   <li><a href='index.html'>Home</a></li>
   <li class='active'><a href='blog.html'>Blog</a></li>
   <li><a href='resume.html'>Resume</a></li>
   <li><a href='contact.html'>Contact</a>
    <li><a href='credit.html'>Credits</a>
   </li>
</ul>
</div>-->
<!-- End Navigation -->

<!-- Begin new navigation-->
<?php wp_nav_menu(array('the_location' => 'cssmenu','container_id' => 'cssmenu'));?>
<!--End New Navigation-->

<div id="contents">
<?php if ( have_posts() ): while( have_posts() ) : the_post();//start the loop?>
<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
<?php the_content();?>

<?php endwhile; endif //end the loop?>

</div>
<div id="sidebar">
	<!--<li><a href=''>Home</a></li>
   <li><a href='blog.html'>Blog</a></li>
   <li><a href='resume.html'>Resume</a></li>
   <li><a href='contact.html'>Contact</a>
    <li><a href='credit.html'>Credits</a>-->
    <h2><?php the_title($post->post_parent); ?></h2>
	<ul>
    <?php wp_list_pages( array( 'title_li' => '',));?>
	</ul>
</div>




<!-- Star WP Footer-->
  <?php wp_footer();?>
  <!-- End WP Footer -->
</html>

