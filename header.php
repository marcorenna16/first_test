<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BASICA! A Free Bootstrap3 HTML5 CSS3 Template by Vactual Art</title>

  	<script src="//use.edgefonts.net/bebas-neue.js"></script>
  	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<?php wp_head(); ?>
</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <header class="navbar navbar-expand-lg navbar-dark" role="banner">

        <div class="container">

            <a class="navbar-brand" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Basica">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- <?php wp_nav_menu( array(
            'theme_location' => 'type_1',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'menu_class' => 'navbar-nav ml-auto',
            'fallback_cb' => 'menu_default'
          )) ?> -->


          <?php wp_nav_menu( array(
          	'theme_location'  => 'type_2',
          	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          	'container'       => 'div',
          	'container_class' => 'collapse navbar-collapse',
          	'container_id'    => 'navbar-collapse-1',
          	'menu_class'      => 'navbar-nav ml-auto',
          	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          	'walker'          => new WP_Bootstrap_Navwalker(),
          ) ); ?>

        </div>

    </header><!--/header-->
