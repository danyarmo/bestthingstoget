<!DOCTYPE html>
<html <?php language_attributes( ); ?>> <!-- specify which lang. is being used -->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); //MAKE SURE TO ALWAYS INCLUDE THIS!!!!?> <!--- wp_head() allows wp to add code automatically as needed -->
    </head>

<body <?php body_class(  ); ?>> <!-- body_class used to link css to specific pages easier -->

     <div class = "fixed-top">
        <div id="showBanner1">

        <div class="bannerSmall d-none d-md-block fixed-top"> <!-- fixed top has priority z-index, so it allows us to change margin of bigheader without changing height-->
        </div>

        <div class="bannerBig d-none d-md-block">
            <div id="bigHeader" ><?php bloginfo('name'); ?></div>
            <div id="tagLine"><?php bloginfo('description'); ?></div>
        </div>

        </div>

        

        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #121212;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!--This creates that button that allows us to expand the nav items when collapsed at sm-->
            </button>
            <div class="d-md-none collapseHeader"><?php bloginfo('name'); ?></div>

            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-center',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav nav-custom',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </nav>

     </div>