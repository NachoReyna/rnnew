<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- Facebook tagging -->
  <meta property="fb:pages" content="302990876817991" />
  <!-- End Facebook Tagging -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
  <link rel="icon" type="imagen.png" href="<?php bloginfo('template_url');?>/images/logos/favicon.png" sizes="64x64">
  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed+Domine" rel="stylesheet">
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <body id="RockNside">
  <?php include('include/page-banner.php') ?>
    <header id="header" class="sticky-top shadow-sm letras-header" style="background-image: url('<?php bloginfo('template_url');?>/images/logos/banner-billetes.png');
">
      <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
              <a class="navbar-brand" href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/images/logos/rocknside_01_blanco.png" alt="Logo RockNside" class="tamano-logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>          
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav ml-auto tipo-letra estilo-menu-desplegable">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php bloginfo('url');?>"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('url');?>/noticias"><i class="far fa-newspaper"></i> Noticias</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('url');?>/musica"><i class="fas fa-headphones-alt"></i> Música</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('url');?>/cine"><i class="fas fa-film"></i> Cine</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('url');?>/cultura"><i class="fas fa-hand-holding-heart"></i> Cultura</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="<?php bloginfo('url');?>/blog"><i class="fab fa-blogger-b"></i> Blog</a>
                </li>
              </ul>
          </div>
      </nav>
    </header>
<?php wp_head(); ?>