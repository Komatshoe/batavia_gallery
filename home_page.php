<?php
/*
Template Name: Home page post
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section>
        <div class="container-fluid learn-sec">
            <div class="container">
                <h2 class="learn-title wow fadeInLeft"><?php the_field('learn-title'); ?></h2>

                <div class="container home-overlap-2">

<?php $post_id = 195;
$queried_post = get_post($post_id);?>
<div class="square-1">
    <img class="img-responsive" src="<?php the_field('square-1'); ?>" alt="ripped-brown-square"> 
</div>
<div class="large-image-1 wow fadeInRight">
    <img class="img-responsive" src="<?php the_field('large-image-1'); ?>" alt="muesum-display">
</div>
<div class="small-image-1">
    <img class="img-responsive wow fadeInRight" src="<?php the_field('small-image-1'); ?>" alt="batavia-artifacts">
</div>
<div class="title-1">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-1">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-1">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                    
                    
                
<?php $post_id = 404;
$queried_post = get_post($post_id);?>
<div class="square-2">
   <img class="img-responsive" src="<?php the_field('square-2'); ?>" alt="ripped-brown-square">
</div>
<div class="large-image-2 wow fadeInRight">
    <img class="img-responsive" src="<?php the_field('large-image-2'); ?>" alt="woman-looking-at-museum-display">
</div>
<div class="small-image-2 wow fadeInRight">
    <img class="img-responsive" src="<?php the_field('small-image-2'); ?>" alt="looking-over-the-shoulder-of-woman-looking-at-museum-display">
</div>
<div class="title-2">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-2">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-2">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                
<?php $post_id = 235;
$queried_post = get_post($post_id);?>
<div class="square-3">
    <img class="img-responsive" src="<?php the_field('square-3'); ?>" alt="ripped-brown-square">
</div>
<div class="large-image-3 wow fadeInRight">
    <img class="img-responsive" src="<?php the_field('large-image-3'); ?>" alt="woman-looking-at-museum-display">
</div>
<div class="small-image-3 wow fadeInRight">
    <img class="img-responsive" src="<?php the_field('small-image-3'); ?>" alt="beardman-jug-pieces">
</div>
<div class="title-3">
    <h4 class="title-text"><?php echo $queried_post->post_title; ?></h4>
</div>
<div class="text-3">
    <p class="body-text"><?php echo $queried_post->post_excerpt; ?></p>
</div>
<div class="container-fluid button-3">
    <?php echo '<a class="readmore button-text" href="'.get_permalink($queried_post).'"><br>Learn More</a>';?> 
</div>
                </div>
            </div>
        </div>
    </section>

    <secion>
        <div class="container-fluid support-sec">
            <div class="home-overlap-3">

                <img class="img-responsive square-support" src="<?php the_field('square-support'); ?>" alt="ripped-brown-square">

                <h2 class="title-text title-support wow fadeInLeft"><?php the_field('title-support'); ?></h2>

                <p class="text-support body-text wow fadeInLeft"><?php the_field('text-support'); ?></p>
                
                <div class="container-fluid button-support">
                    <a class="button-text" href="<?php the_field('button-support'); ?>">JOIN THE CREW</a>
                </div>

            </div>
        </div>
    </secion>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>