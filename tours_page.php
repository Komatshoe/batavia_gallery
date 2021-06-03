<?php
/*
Template Name: Tours page content 
*/
?>
<?php include (TEMPLATEPATH . '/tours_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<section>
        <div class="container-fluid tours-sec">
            <div class="container tours-overlap-2">
                <div class="square-tours-1">
                    <img class="img-responsive" src="<?php the_field('square-tours-1'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-tours-1">
                    <img class="img-responsive" src="<?php the_field('tour-image-1'); ?>" alt="museum-display">
                </div>
                
                <div class="title-tours-1">
                    <h3 class="title-text-tours"><?php the_field('title-tours-1'); ?></h3>
                </div>
                    
                <div class="text-tours-1"> 
                    <p class="body-text-tours"><?php the_field('text-tours-1'); ?></p>
                </div>
                
                <div class="time-tours-1"> 
                    <p class="body-text"><?php the_field('time-tours-1'); ?></p>
                </div>
                
                <div class="container-fluid button-tours-1">
                        <a href="<?php the_field('button-tours-1'); ?>" class="button-text">BOOK NOW</a>
                </div>
                
                
                
                <div class="square-tours-2">
                    <img class="img-responsive" src="<?php the_field('square-tours-2'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-tours-2">
                    <img class="img-responsive" src="<?php the_field('tour-image-2'); ?>" alt="woman-looking-at-museum-display">
                </div>
                
                <div class="title-tours-2">
                    <h3 class="title-text-tours"><?php the_field('title-tours-2'); ?></h3>
                </div>
                    
                <div class="text-tours-2"> 
                    <p class="body-text-tours"><?php the_field('text-tours-2'); ?></p>
                </div>
                

                <div class="time-tours-2"> 
                    <p class="body-text"><?php the_field('time-tours-2'); ?></p>
                </div>
                
                <div class="container-fluid button-tours-2">
                        <a href="<?php the_field('button-tours-2'); ?>" class="button-text">BOOK NOW</a>
                </div>

                
                
                
                <div class="square-tours-3">
                    <img class="img-responsive" src="<?php the_field('square-tours-3'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-tours-3">
                    <img class="img-responsive" src="<?php the_field('tour-image-3'); ?>" alt="woman-looking-at-museum-display">
                </div>
                
                <div class="title-tours-3">
                    <h3 class="title-text-tours"><?php the_field('title-tours-3'); ?></h3>
                </div>
                    
                <div class="text-tours-3"> 
                    <p class="body-text-tours"><?php the_field('text-tours-3'); ?></p>
                </div>
                
                <div class="time-tours-3"> 
                    <p class="body-text"><?php the_field('time-tours-3'); ?></p>
                </div>
                
                <div class="container-fluid button-tours-3">
                        <a href="<?php the_field('button-tours-3'); ?>" class="button-text">BOOK NOW</a>
                </div>
                
                
                
                <div class="square-tours-4">
                    <img class="img-responsive" src="<?php the_field('square-tours-4'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-tours-4">
                    <img class="img-responsive" src="<?php the_field('tour-image-4'); ?>" alt="woman-kneeling-holding-broken-jug">
                </div>
                
                <div class="title-tours-4">
                    <h3 class="title-text-tours"><?php the_field('title-tours-4'); ?></h3>
                </div>
                    
                <div class="text-tours-4"> 
                    <p class="body-text-tours"><?php the_field('text-tours-4'); ?></p>
                </div>
                
                <div class="time-tours-4"> 
                    <p class="body-text"><?php the_field('time-tours-4'); ?></p>
                </div>
                
                <div class="container-fluid button-tours-4">
                        <a href="<?php the_field('button-tours-4'); ?>" class="button-text">BOOK NOW</a>
                </div>
                
            </div> 
            
        </div>
        
    
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>