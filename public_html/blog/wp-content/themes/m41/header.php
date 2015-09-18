<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Geoff Newell">

        <title><?php wp_title('|', true, 'right'); ?></title>

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <!-- CHANGE THIS IF SITE IS RELOCATED -->
        <base href="http://localhost/m41/public_html/">
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <?php
            if (is_admin_bar_showing()) {
                // Make space for the admin_bar so that it doesn't overwrite menu
                echo '<div style="min-height: 32px;"></div>';
            }
            ?>

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.shtml">M41 Ltd</a>
                </div>
                <!-- pick up wp_bootstrap_navwalker as custom walker
                From https://github.com/twittem/wp-bootstrap-navwalker
                http://stackoverflow.com/questions/25332527/convert-bootstrap-navbar-to-wordpress-menu
                -->
               <?php wp_nav_menu( array( 
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'navbar-collapse-1',
                    'depth'             => 2,
                    'container'         => 'div',
                    'theme_location'    => 'header-menu',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker() 
                   ) ); ?>
            </div> <!-- /.container -->
        </nav>
