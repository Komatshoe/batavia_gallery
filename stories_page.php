<?php
/*
Template Name: Stories page post
*/
?>
<?php include (TEMPLATEPATH . '/stories_header.php'); ?>
<section>
        <div class="container-fluid stories-sec">
            <div class="container stories-overlap-2">
                
                
<?php $post_id = 195;
$queried_post = get_post($post_id);?>
<div class="square-stories-1">
    <img class="img-responsive" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/square-1.png" alt="ripped-brown-square">
</div>
<div class="image-stories-1 wow fadeInRight">  
    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
</div>
<div class="title-stories-1">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-stories-1">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-stories-1">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                
<?php $post_id = 404;
$queried_post = get_post($post_id);?>
<div class="square-stories-2">
    <img class="img-responsive" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/square-1.png" alt="ripped-brown-square">
</div>
<div class="image-stories-2 wow fadeInRight">  
    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
</div>
<div class="title-stories-2">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-stories-2">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-stories-2">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                
<?php $post_id = 235;
$queried_post = get_post($post_id);?>
<div class="square-stories-3">
    <img class="img-responsive" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/square-1.png" alt="ripped-brown-square">
</div>
<div class="image-stories-3 wow fadeInRight">  
    <?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
</div>
<div class="title-stories-3">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-stories-3">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-stories-3">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                
                
            
                
            </div>
            
        </div>
        
    
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>