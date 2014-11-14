
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>
    <!-- Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="author" content="juan2ramos"/>
    <meta name="contact" content="juan2ramos@gmail.com"/>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/prefixfree.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js" media="all"></script><![endif]-->

    <!-- Meta Facebook -->
    <meta property="og:url" content="http://circulart.org/">
    <meta property="og:title" content="Circulart2014 Circulart2014 Mercado Cultural de Medellín dedicado a la industria musical Latinoamericana"/>
    <meta property="og:description" content="Circulart2014 Mercado Cultural de Medellín dedicado a la industria musical Latinoamericana http://circulart.org/ Encuentro anual, dedicado a la industria musical independiente de Latinoamérica, show cases, conferencias, talleres, networking, sesiones de negocios y una oportunidad única de descubrir la diversidad musical Iberoamericana.."/>
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/header/circulart2014.png"/>


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header>
    <div id="slide">
    <?php 
    $pagename =     ( get_query_var('pagename') )? get_query_var('pagename'):'que-es' ;
    ?>
        <figure id="header-buttom">
            <img src="<?php bloginfo('template_directory'); ?>/images/header/<?php echo $pagename;?>.jpg">
        </figure>
    </div>
    <div id="contend-logo">

        <div class="logo-circulart <?php echo $pagename ?>" class="">
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo Circulart"/>
        </div>
        <div class="logo <?php echo $pagename ?>">
            <img src="<?php bloginfo('template_directory'); ?>/images/circulart.png" alt="Circulart"/>
        </div>
    </div>


</header>
<nav>
    <ul>
        <li><a href="/" class="">qué es?</a></li>
        <li><a href="portafolio" class="">portafolios artistas</a></li>
        <li><a href="http://redlat.org/circulart2014" >Mercado</a></li>
        <li><a href="#">circulart radio</a></li>
        <li><a href="noticias" class="">noticias</a></li>
        <li><a href="contacto" class="">contacto</a></li>
    </ul>
    <div id="network">
        <ul>
            <li id="twitter"><a href="#"><span class="icon-twitter"></span></a></li>
            <li id="facebook"><a href="#"><span class="icon-facebook"></span></a></li>
            <li id="pinterest"><a href="#"><span class="icon-pinterest"></span></a></li>
            <li id="youtube"><a href="#"><span class="icon-uniE603"></span></a></li>
        </ul>
    </div>

