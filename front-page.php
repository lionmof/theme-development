<?php get_header(); ?>
<section class="main-content text-center">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <p><?php the_content(); ?></p>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no results found.'); ?></p>
    <?php endif; ?>
</section>
<section class="news-main">
    <div class="container news-block">
        <h3 class="title"><span>Latest News</span></h3>
        <?php
            $args = array(
              'post_type' => 'post',
              'order' => 'ASC',
              'posts_per_page' => 2
            );
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
        <div class="news-block-inner row">
            <div class="img-wrapper wer col-sm-6"><img src="<?php echo get_field('image_post'); ?>" alt="<?php the_title(); ?>"></div>
            <div class="text col-sm-6">
                <a href="<?php the_permalink(); ?>" class="title-link">
                <?php the_title(); ?>
                </a>
                <div class="date">
                    Posted <?php the_time("d.m.Y"); ?>
                </div>
                <div class="title-text"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="more">READ MORE</a>
            </div>
        </div>
        <?php }
            } else {
              // Постов не найдено
            }
            
            wp_reset_postdata(); ?>
    </div>
</section>

<section class="testimonials-slider-block text-center">
    <div class="block-strip"><div></div></div>
    <div class="container">
        <h3 class="title"><span>Testimonials</span></h3>
    </div>
    <div class="slider-testimonials">
        <?php $mytestimonials = new WP_Query(array(
            'post_type' => 'my_testimonials'
            )); ?>
        <?php while($mytestimonials -> have_posts()) : $mytestimonials -> the_post(); ?>
        <div class="item">
            <div class="img-block col-lg-3 col-md-3 col-sm-3"><img src="<?php the_field('photo-author'); ?>" alt="<?php the_title(); ?>" width="167" height="113" /></div>
            <div class="text-block col-lg-9 col-md-9 col-sm-9">
                <p><?php the_field('text-testimoinals'); ?></p>
                <strong class="author"><?php the_field('text-author'); ?></strong>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<section class="information-block">
    <div class="container">
        <div class="row">
            <div class="contactus col-lg-3 col-sm-5">
                <?php if( !dynamic_sidebar( 'contact' ) ): ?>
                <h2 class="module-heading">Sidebar Setup</h2>
                <p>Please add widgets via the admin area!</p>
                <?php endif; ?>
            </div>
            <div class="findus col-lg-6 col-sm-7">
                <?php if( !dynamic_sidebar( 'find' ) ): ?>
                <h2 class="module-heading">Sidebar Setup</h2>
                <p>Please add widgets via the admin area!</p>
                <?php endif; ?>
            </div>
            <div class="form-block col-lg-3">
                <?php if( !dynamic_sidebar( 'write' ) ): ?>
                <h2 class="module-heading">Sidebar Setup</h2>
                <p>Please add widgets via the admin area!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>