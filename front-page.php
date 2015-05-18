<?php get_header();?>
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
<?php while (have_posts() ): the_post();?>
<?php the_content();?>
<?php endwhile;?>
</div>
<div class="mission">
<h1>Latest Post</h1>
<?php rewind_posts();?>
<?php query_posts('showposts=4')?>
<ul>
<?php while (have_posts() ): the_post();?><li> <a href="<?php the_permalink();?>">
<?php the_title();?></a>
</li>
<?php endwhile;?>
</ul>
</div>
<div class="offers">
<h1>Offers</h1>      
<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas.
Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
semper. <em>Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper
pharetra.</em> Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi.</p>
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
  
  <?php get_footer();?>
