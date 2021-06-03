<!DOCTYPE html>
<html lang="en">

<head>
    <title>Batavia Gallery Tours</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
    
    	<meta name="description" content="<?php bloginfo('description'); ?>">


<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
    <!—Google fonts  -->
        
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+English:ital@1&display=swap" rel="stylesheet">
    
<?php wp_head(); ?>
</head>

<body>
    <header class="container-fluid tours-sec-hero"<?php if ( get_field(' tours-hero ') ) { echo 'style="background: url(' . get_field(' tours-hero ') . ')"'; } ?>>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid nav-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img class="navbar-brand" src="http://206.189.45.97/~mesh14/wp-content/themes/batavia_gallery/images/logo.png" alt="batavia-gallery-logo">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">

<ul class="nav navbar-nav collapse navbar-collapse navbar-right nav-text">
<?php wp_nav_menu(array(
        'menu' => 'Batavia Top Menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
</ul>

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="tours-overlap-1">
                <div class="square-tours">
                    <img class="img-responsive" src="<?php the_field('square-tours'); ?>" alt="ripped-brown-square">
                </div>
                
                <h2 class="title-tours animated fadeInLeft"><?php the_field('title-tours'); ?></h2>
                
                <div class="text-tours">
                    <p class="body-text"><?php the_field('text-tours'); ?></p>
                </div>
                
            </div>
        </div> 
       
</header>