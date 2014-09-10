<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  

  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

    <!-- Main navigation -->
    <header>
        <section class="Top-menu"> 
            <div class="u-gridContainer">
                <div class="u-gridRow">                 
                    <div class="phonenumber u-gridCol6">
                        <div class="phonenumber-info">
                            <p><svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-phone"></use></svg>010-2733962</p>
                        </div> 
                    </div>                  
                </div>
            </div>
        </section>


        <section class="Menu-carousel">
            <div class="Navigation-wrapper">
                <section id="Navigation" class="sticky">
                    <div class="u-gridContainer">
                        <div class="u-gridRow">
                            <div class="u-gridCol3">
                                <figure> <a href="/"> <img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/ico/logo.svg" alt="logo" /> </a> </figure></figure>
                            </div>
                            <div class="u-gridCol9">
                                <div class="Nav-toggle">
                                    <a class="Navigation-menuToggle" id="js-navCollapse">
                                        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                            <use xlink:href="#icon-menu2"></use>
                                        </svg>
                                    </a>
                                </div>
                                <?php include 'includes/navigation.php'; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="Carousel-content">
                <h2> Mao Administratie </h2>
                <p> Sympathie en waardering spelen vaak een  </p>
                <p> doorslaggevende rol in het doen van zaken.</p>
            </div>
        </section>
        <div id="Sticky-anchor"> </div>
    </header>