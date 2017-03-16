<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php  body_class(); ?>>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <div class="logo text-left visible-xs">
                        <?php the_custom_logo(); ?>
                        <span><?php bloginfo('description'); ?></span>
                    </div>
                    <div class="menu"><?php wp_nav_menu( $args ); ?></div>
                    <div class="social-icon pull-left ">
                        <?php if( !dynamic_sidebar( 'page' ) ): ?>
                        <h2 class="module-heading">Sidebar Setup</h2>
                        <p>Please add widgets via the admin area!</p>
                        <?php endif; ?>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse pull-right ">
                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                    </div>
                    <div class="logo text-left hidden-xs">
                        <?php the_custom_logo(); ?>
                        <span><?php bloginfo('description'); ?></span>
                    </div>
                </div>
            </div>
        </nav>