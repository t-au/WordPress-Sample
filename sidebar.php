</div>

<div id="sidebar">
 


    
    
    <?php if (is_page()) : ?>
    <h2 class="sub-navigation-title">
    <?php echo get_the_title($post->post_parent);?></h2>
 <?php 
    
    if ($post->post_parent) { 
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
    } else {
     wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); 
    }
 
?>
<?php endif; ?>
    <?php if  (!(is_page() )): ?>
    <h2>Blog</h2>
    <ul><?php wp_list_categories(array('title_li' => __('')));  ?></ul>
         <?php endif; ?>

    <?php if(get_post_meta($post->ID , 'Quote' , true)): ?>
    
     <blockquote><?php echo get_post_meta($post->ID , 'Quote' , true);?> <blockquote>
         <?php endif; ?>
    
    
