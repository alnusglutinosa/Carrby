<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title>Carrby - Agency Template</title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php bloginfo('template_url'); ?>/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Lead Style -->
        <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" type="text/css">

        <?php wp_head(); ?>

    </head>

    <body>
    
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo"></a>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#about">About Us</a></li>
                                <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

