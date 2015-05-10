<?php get_header();?>
</div>



<div id="contents">
<?php if ( have_posts() ): while( have_posts() ) : the_post();//start the loop?>
<h2><?php the_title();?></h2>
<?php the_content();?>

<?php endwhile; endif //end the loop?>
<small>page.php</small>
</ul>
<?php get_sidebar();?>
<?php get_footer();?>

