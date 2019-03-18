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
  <!-- Facebook Social Ophen Grapht -->
  <meta property="fb:app_id" content="283842588832759" />
  <meta property="og:url" content="<?php echo the_permalink(); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo the_title(); ?>" />
  <meta property="og:description" content="<?php the_excerpt(); ?>" />
  <meta property="og:image" content="<?php the_post_thumbnail_url(); ?> " />
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@rocknside">
  <meta name="twitter:creator" content="@rocknside">
  <meta name="twitter:title" content="<?php echo the_title(); ?>">
  <meta name="twitter:description" content="<?php the_excerpt(); ?>">
  <!-- Las imágenes de sumario de Twitter deben ser de al menos 200x200px -->
  <meta name="twitter:image" content="<?php the_post_thumbnail_url(); ?>">
  <?php } // end while
    } // end if ?>
  <!-- End of facebook tagging -->
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="">
  <!--meta name="robots" content="INDEX,FOLLOW" NO SEO/-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
  <link rel="icon" type="imagen.png" href="<?php bloginfo('template_url');?>/images/logos/favicon.png" sizes="64x64">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
  <body id="RockNside">
  <?php include('include/page-rs.php') ?>
    <header id="header" class="sticky-top shadow-sm letras-header">
      <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
              <a class="navbar-brand" href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/images/logos/logoRockNsideSombra.png" alt="Logo RockNside" class="tamano-logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-caret-down"></i>
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav ml-auto tipo-letra estilo-menu-desplegable">
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
      </nav>
    </header>
<?php wp_head(); ?>