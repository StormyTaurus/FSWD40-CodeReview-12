<!doctype html>
<!-- get language tag from wordpress -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('author'); ?>">
    <link rel="icon" href="img/favicon.ico">

    <title><?php bloginfo('name'); ?> <?php wp_title ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">-->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>

     <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato" rel="stylesheet"> 


</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="justify-content-between align-items-center">
                <div class="jumbotron bg-jumbotron">
                    <h1><?php bloginfo('name'); ?></h1>
                    <p class="lead"><?php bloginfo('description'); ?></p>
                </div>
            </div>
        </header>

        
        <nav class="navbar navbar-expand-md" role="navigation">
            <div class="container">
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
	        </button>
                <?php
                    wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
		            ) );
                ?>
            </div>
        </nav>        
    </div>


<main role="main" class="container">


<div class="row">
    <div class="col-md-8 blog-main">