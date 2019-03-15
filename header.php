<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- Facebook tagging -->
  <meta property="fb:pages" content="302990876817991" />
  <?php
    if ( have_posts() ) {
    	while ( have_posts() ) {
    	the_post(); ?>
  <meta property="fb:app_id" content="283842588832759" />
  <meta property="og:url" content="<?php echo the_permalink(); ?>" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="<?php echo the_title(); ?>" />
  <meta property="og:description" content="<?php the_excerpt(); ?>" />
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?> " />
  <?php } // end while
    } // end if ?>
  <!-- End of facebook tagging -->
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="">
  <!--meta name="robots" content="INDEX,FOLLOW" NO SEO/-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
  <link rel="icon" type="imagen.png" href="<?php bloginfo('template_url');?>/images/fav.png" sizes="64x64">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

  <!--[if IE 6]>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/ie6.css">
        <![endif]-->
  <!--[if IE 7]>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/ie7.css">
        <![endif]-->
  <!--[if IE 8]>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/ie8.css">
        <![endif]-->
  <!--[if IE 9]>
			<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/ie9.css">
        <![endif]-->
  <title><?php bloginfo('name')?></title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122847204-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());
  gtag('config', 'UA-122847204-1');
  </script>
  <div id="section-header-icons-social" class="fixed-top">
    <div class="container">
      <div class=" d-flex flex-row-reverse">
        <a class="links-redes" target="_blank" href="https://twitter.com/rocknside">
          <i class="fab fa-twitter-square"></i>
      </a>
        <a class="links-redes" target="_blank" href="https://www.instagram.com/rocknside/">
          <i class="fab fa-instagram"></i>
        </a>
        <a class="links-redes" target="_blank" href="https://www.facebook.com/RockNside/">
          <i class="fab fa-facebook"></i>
        </a>
        <a class="links-redes" target="_blank" href="https://www.youtube.com/rocknside">
          <i class="fab fa-youtube"></i>
        </a>
      </div>
    </div>
  </div>
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top letras-header shadow-sm mt-4 bg-white d-flex justify-content-between">
      <div class="container">
        <div>
          <a class="navbar-brand" href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_url');?>/images/logos/logo_nuevo.png" alt="" class="tamano-logo">
          </a>
        </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-caret-down"></i>
      </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto tipo-letra estilo-menu-desplegable">
            <li class="nav-item active">
              <a class="nav-link" href="<?php bloginfo('url');?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url');?>/noticias">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url');?>/musica">Música</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url');?>/cine">Cine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php bloginfo('url');?>/cultura">Cultura</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php wp_head(); ?>
<body id="RockNside">
