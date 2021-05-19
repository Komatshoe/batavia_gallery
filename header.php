<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    
    <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
</title>
    
    <!-- Boostrap -->
    \
<?php wp_head(); ?>
    </head>

<body>
    <header class="container-fluid sec1">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid nav-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="navbar-brand" src="images/logo.png">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav collapse navbar-collapse navbar-right nav-text">
                        <li><a href="index.html"> HOME</a></li>
                        <li><a href="service-page.html"> VISIT</a></li>
                        <li><a href="blog-page.html"> EXPLORE</a></li>
                        <li><a href="#"> SUPPORT</a></li>
                        <li><a href="#"> ABOUT</a></li>
                        <li><a href="#"> LANGUAGE</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container-fluid hero-sec">
            <div class="home-overlap-1">

                <img class="img-responsive square-hero" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/square-2.png">

                <h1 class="title-hero">Surviving the Batavia</h1>

                <p class=" text-hero">Discover the story of mutiny and murder that surrounded the Batavia Shipwreck </p>

                <div class="container-fluid button-hero">
                    <a href="service-page.html" class="button-text">PLAN YOUR VISIT</a>
                </div>


            </div>
        </div>

    </header>


</body>

</html>