<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
   <?php
  	if( is_home() ){
          $image = 'https://rocknside.com/wp-content/themes/rnnew/images/logos/logoRockNsideSombra.png';
		}else{
			if( have_posts() ) :
				while( have_posts() ) :
					the_post();
					$image = get_the_post_thumbnail_url();
				endwhile;
			endif;
		}
  ?>
  <!-- Facebook tagging -->
  <meta property="fb:pages" content="302990876817991" />
  <meta property="og:image" content="<?php echo $image; ?> " />
  <!-- End Facebook Tagging -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
  <link rel="icon" type="imagen.png" href="<?php bloginfo('template_url');?>/images/logos/favicon.png" sizes="64x64">
  <!-- Fuentes -->
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
    <header id="header" class="sticky-top shadow letras-header pt-2 pb-2">
      <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container-fluid">
          <div class="ml-auto">
            <a class="navbar-brand" href="<?php bloginfo('url');?>">
                <img src="<?php bloginfo('template_url');?>/images/logos/rockinside_arreglado.png" alt="Logo RockNside" class="tamano-logo">
              </a>
          </div>      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>          
          </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav m-auto tipo-letra estilo-menu-desplegable">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php bloginfo('url');?>"> Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-2 pr-2" href="<?php bloginfo('url');?>/noticias"> Noticias</a>
                </li>
                <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/musica"> Música</a>
                </li>
                <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/cine"> Cine</a>
                </li>
                <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/cultura"> Cultura</a>
                </li>
                 <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/blog"> Blog</a>
                </li>
                <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/blog"> RockNside Crew</a>
                </li>
                <li class="nav-item pl-2 pr-2">
                  <a class="nav-link" href="<?php bloginfo('url');?>/blog"> RockNside Merch</a>
                </li>
              </ul>
          </div>
          <div class="mr-auto">
            <a href=""><i class="fas fa-user-friends fa-1x"></i></a>
            <a href=""><i class="fas fa-shopping-bag fa-1x"></i></a>
          </div>
      </nav>
    </header>
<?php wp_head(); ?>