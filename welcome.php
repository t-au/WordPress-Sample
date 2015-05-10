<!DOCTYPE html> 
<head>
<html>
 <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all"/>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
<!-- End Toggle Menu -->

<!-- Start WP head -->
<?php wp_head();?>
<!-- End WP head -->
</head>
<body <?php body_class();?>>
<div id="navbar"><a href="../wordpress"><img src="<?php bloginfo('template_directory'); ?>/images/navbar.png" style="width:50px;"></a></div>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='../wordpress'>Home</a></li>
   <li><a href='blog.html'>Blog</a></li>
   <li><a href='resume.html'>Resume</a></li>
   <li><a href='contact.html'>Contact</a>
    <li><a href='credit.html'>Credits</a>
   </li>
</ul>
</div>

<div id="flexslider">
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/slider1.jpg" alt="" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/slider2.jpg" alt="" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/slider3.jpg" alt="" />
    </li>
    <li>
      <img src="<?php bloginfo('template_directory'); ?>/images/slider4.jpg" alt="" /></li>
    </ul></div>

</div>
<div id="content">
<div id="information">
<div class="about">
<h1>About</h1> 
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. </p>
</div>
<div class="mission">
<h1>Mission</h1>
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.  Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi.</p>
</div>
<div class="offers">
<h1>Offers</h1>      
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.</em> Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi.</p>
</div>

</div>


</html>

<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!-- End Footer -->
  
  <!-- Star WP Footer-->
  <?php wp_footer();?>
  <!-- End WP Footer -->
  
</body>

