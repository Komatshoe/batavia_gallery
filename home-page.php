<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section>
        <div class="container-fluid learn-sec">
            <div class="container">
                <h2 class="learn-title"> Learn more about the Batavia</h2>

                <div class="container home-overlap-2">


                    <div class="square-1">
                        <img class="img-responsive" src="<?php the_field('square-1'); ?>" alt="ripped-brown-square">
                    </div>

                    <div class="large-image-1">
                        <img class="img-responsive" src="<?php the_field('large-image-1'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="small-image-1">
                        <img class="img-responsive" src="<?php the_field('small-image-1'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="title-1">
                        <h3 class="title-text"><?php the_field('title-1'); ?></h3>
                    </div>

                    <div class="text-1">
                        <p class="body-text"><?php the_field('text-1'); ?></p>
                    </div>

                    <div class="container-fluid button-1">
                        <a href="blog-page.html" class="button-text" src="<?php the_field('button-1'); ?>">Learn More</a>
                    </div>



                    <div class="square-2">
                        <img class="img-responsive" src="<?php the_field('square-2'); ?>" alt="ripped-brown-square">
                    </div>

                    <div class="large-image-2">
                        <img class="img-responsive" src="<?php the_field('large-image-2'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="small-image-2">
                        <img class="img-responsive" src="<?php the_field('small-image-2'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="title-2">
                        <h3 class="title-text"><?php the_field('title-2'); ?></h3>
                    </div>

                    <div class="text-2">
                        <p class="body-text"><?php the_field('text-2'); ?></p>
                    </div>

                    <div class="container-fluid button-2">
                        <a href="blog-page.html" class="button-text" src="<?php the_field('button-2'); ?>">Learn More</a>
                    </div>



                    <div class="square-3">
                        <img class="img-responsive" src="<?php the_field('square-3'); ?>" alt="ripped-brown-square">
                    </div>

                    <div class="large-image-3">
                        <img class="img-responsive" src="<?php the_field('large-image-3'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="small-image-3">
                        <img class="img-responsive" src="<?php the_field('small-image-3'); ?>" alt="museum-artifacts-on-display">
                    </div>

                    <div class="title-3">
                        <h3 class="title-text"><?php the_field('title-3'); ?></h3>
                    </div>

                    <div class="text-3">
                        <p class="body-text"><?php the_field('text-3'); ?></p>
                    </div>

                    <div class="container-fluid button-3">
                        <a href="blog-page.html" class="button-text" src="<?php the_field('button-3'); ?>">Learn More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <secion>
        <div class="container-fluid support-sec">
            <div class="home-overlap-3">

                <img class="img-responsive square-support" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/square-2.png" alt="ripped-brown-square">

                <h2 class='title-text title-support'>Support the Batavia</h2>

                <p class="text-support body-text">Want to become apart of the Batavia crew today?
Helps us change lives by joining our membership and volunteering programs. </p>
                
                <div class="container-fluid button-support">
                    <a href="#" class="button-text">JOIN THE CREW</a>
                </div>

            </div>
        </div>
    </secion>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>