<?php get_header(); ?>

<section class="main-content text-center">
   <div class="container single-post-block">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="img-wrapper"><img src="<?php echo get_field('image_post'); ?>" alt=""></div>
          <div class="page-header">
            <h1><?php the_title(); ?></h1>
            <p><em>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </em></p>
          </div>

          <?php the_content(); ?>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>
      
</section>
    


<?php get_footer(); ?>