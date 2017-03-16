<?php get_header(); ?>

<section class="main-content text-center">
  
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
      <p><?php the_content(); ?></p>        
	
	<?php endwhile; else : ?>
	
	  <p><?php _e( 'Sorry, no results found.', 'treehouse-portfolio' ); ?></p>
	
	<?php endif; ?>
   
</section>


<?php get_footer(); ?>