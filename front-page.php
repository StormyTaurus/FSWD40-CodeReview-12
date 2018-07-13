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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>

    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

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
        
    </div>

<div class="container">

<section class="showcase" height="500">
        
        <div id="carousel_header" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel_header" data-slide-to="0" class="active"></li>
                <li data-target="#carousel_header" data-slide-to="1"></li>
                <li data-target="#carousel_header" data-slide-to="2"></li>
                <li data-target="#carousel_header" data-slide-to="3"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 rounded" src="wp-content/themes/cr12_mario_schantel_traveler_final/img/header1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="wp-content/themes/cr12_mario_schantel_traveler_final/img/header2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="wp-content/themes/cr12_mario_schantel_traveler_final/img/header3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" src="wp-content/themes/cr12_mario_schantel_traveler_final/img/header4.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel_header" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel_header" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

</section>

<nav class="navbar navbar-expand-md" role="navigation">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
	        </button>
	        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
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


<section class="boxes">
        <div class="row">

            <div class="col-md-4">
                <div class="box">
                <i class="fas fa-globe"></i>
                    <h3>Featured Topic 1</h3>
                    <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.

</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                <i class="fas fa-map"></i>
                    <h3>Featured Topic 2</h3>
                    <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.

</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                <i class="fas fa-street-view"></i>
                    <h3>Featured Topic 3</h3>
                    <p>Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko. Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.

</p>
                </div>
            </div>

    </div>
</section>
</div>

<?php get_footer(); ?>