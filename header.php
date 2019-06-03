<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <!-- Facebook tagging -->
  <meta property="fb:pages" content="302990876817991" />
  <?php
  	if( is_home() ){
          $resulttitle = get_bloginfo('name');
          $resultdescription = get_bloginfo('description');
           ?>  
          <title><?php echo $resulttitle; ?></title>
          <meta name="description"
            content="<?php echo $resultdescription; ?>" />
          <?php
          $resultkeywords = '';
          $resultlang = get_bloginfo('url');
          $image = 'https://rocknside.com/wp-content/themes/rnnew/images/logos/logoRockNsideSombra.png';
		}else{
			if( have_posts() ) :
				while( have_posts() ) :
          the_post();
          $resulttitle = get_the_title();
          $resultdescription = get_the_excerpt();
          ?>  
          <title><?php echo $resulttitle; ?></title>
          <meta name="description"
            content="<?php echo $resultdescription; ?>" />
          <?php
					$resultkeywords = get_field('keywords');
					$resultlang = get_permalink();
					$image = get_the_post_thumbnail_url();
				endwhile;
			endif;
		}
		$metatitle = $resulttitle;
		$metadescription = $resultdescription;
		$metakeywords = $resultkeywords;
    $metalang = $resultlang;
?>
  <!-- Facebook Social Ophen Grapht -->
  <meta property="fb:app_id" content="283842588832759" />
  <meta property="og:url" content="<?php echo $metalang; ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $metatitle; ?>" />
  <meta property="og:description" content="<?php echo $metadescription; ?>" />
  <meta property="og:image" content="<?php echo $image; ?> " />
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@rocknside">
  <meta name="twitter:creator" content="@rocknside">
  <meta name="twitter:title" content="<?php echo $metatitle; ?>">
  <meta name="twitter:description" content="<?php echo $metadescription; ?>">
  <!-- Las imágenes de sumario de Twitter deben ser de al menos 200x200px -->
  <meta name="twitter:image" content="<?php echo $image; ?>">
  <!-- End of facebook tagging -->
  <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
  <meta name="keywords" content="">
  <!--meta name="robots" content="INDEX,FOLLOW" NO SEO/-->
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
  <link rel="icon" type="imagen.png" href="<?php bloginfo('template_url');?>/images/logos/favicon.png" sizes="64x64">


  <!-- Fuentes -->
<link href="https://fonts.googleapis.com/css?family=Fenix&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet">




  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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