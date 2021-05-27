<?php
    /*
    Template Name: Tours page
    */
    ?>
<?php get_header(TEMPLATEPATH . '/stories_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<section>
        <div class="container-fluid stories-sec">
            <div class="container stories-overlap-2">
                <div class="square-stories-1">
                    <img class="img-responsive" src="<?php the_field('square-stories-1'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-stories-1">
                    <img class="img-responsive" src="<?php the_field('image-stories-1'); ?>" alt="museum-display">
                </div>
                
                <div class="title-stories-1">
                    <h3 class="title-text"><?php the_field('title-stories-1'); ?></h3>
                </div>
                    
                <div class="text-stories-1"> 
                    <p class="body-text"><?php the_field('text-stories-1'); ?></p>
                </div>
                
                <div class="container-fluid button-stories-1">
                        <a href="<?php the_field('button-stories-1'); ?>" class="button-text">READ MORE</a>
                </div>
                
                
                <div class="square-stories-2">
                    <img class="img-responsive" src="<?php the_field('square-stories-2'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-stories-2">
                    <img class="img-responsive" src="<?php the_field('image-stories-2'); ?>" alt="woman-looking-at-museum-display">
                </div>
                
                <div class="title-stories-2">
                    <h3 class="title-text"><?php the_field('title-stories-2'); ?></h3>
                </div>
                    
                <div class="text-stories-2"> 
                    <p class="body-text"><?php the_field('text-stories-2'); ?></p>
                </div>
                
                <div class="container-fluid button-stories-2">
                        <a href="<?php the_field('button-stories-1'); ?>" class="button-text">READ MORE</a>
                </div>
                
                
                <div class="square-stories-3">
                    <img class="img-responsive" src="<?php the_field('square-stories-3'); ?>" alt="ripped-brown-square">
                </div>
                
                <div class="image-stories-3">
                    <img class="img-responsive" src="<?php the_field('image-stories-3'); ?>" alt="woman-looking-at-museum-display">
                </div>
                
                <div class="title-stories-3">
                    <h3 class="title-text"><?php the_field('title-stories-3'); ?></h3>
                </div>
                    
                <div class="text-stories-3"> 
                    <p class="body-text"><?php the_field('text-stories-3'); ?></p>
                </div>
                
                <div class="container-fluid button-stories-3">
                        <a href="<?php the_field('button-stories-1'); ?>" class="button-text">READ MORE</a>
                </div>
                
            </div>
            
        </div>
        
    
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>