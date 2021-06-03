<?php
/*
Template Name: About
*/
?>
<?php include (TEMPLATEPATH . '/about_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<section>
<div class="container-fluid maincontainer page-container">
    <div class="container">
        <div class="row">
            <section class="col-sm-7 maintext">				
    <article class="excerpts"><!----> <!--we can reuse the css on the old article to restyle the new dynamic posts-->
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
<div class="post single-page">
		<h3 class="posttitle title-text" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h3>

		<div class="postcontent body-text">
			<?php /*?><?php the_post_thumbnail(array(150,150), array ('class' => 'alignright')); ?><?php */?>
			<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong>', 'after' => '</p>')); ?>
        </div><!--postcontet-->
		
	</div><!--post class-->

   
<?php endwhile; ?>
	
	<?php else: ?>
	<div class="post">
		<p>Sorry, no posts found.</p>
	</div><!--post-->
	<?php endif; ?>
	</article><!---->
</section>
           
     </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>