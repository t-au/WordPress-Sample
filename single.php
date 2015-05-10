<?php get_header();?>
</div>



<div id="contents">
<?php if ( have_posts() ): while( have_posts() ) : the_post();//start the loop?>
<h2><?php the_title();?></h2>
<small>The By line goes here.</small>
<?php the_content();?>

<?php endwhile; endif //end the loop?>
<small>single.php</small>
</ul>
<?php get_sidebar();?>
<?php get_footer();?>

