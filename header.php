<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- Facebook tagging -->
		<meta property="fb:app_id" content=""/>
		<meta property="og:type"   content="website" />
		<meta property="og:url"    content="<?php bloginfo('url')?>" />
		<meta property="og:title"  content="<?php bloginfo('name')?>"/>
		<meta property="og:image"  content="" />
		<meta property="og:description"  content="<?php bloginfo('description')?>"/>
		<!-- End of facebook tagging -->
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
		<meta name="description" content="<?php bloginfo('description')?>">
		<meta name="keywords" content="">
		<!--meta name="robots" content="INDEX,FOLLOW" NO SEO/-->
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url');?>/css/generals.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Aleo|Montserrat|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<title><?php bloginfo('name')?></title>
		<header id="header">
			<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light shadow-sm p-3 mb-5 bg-white rounded">
				<a class="navbar-brand" href="index"><img src="<?php bloginfo('template_url');?>/images/logos/rnsiders.png" width="40%" alt="" class="tamano-logo">	</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav mr-auto tipo-letra">
						<li class="nav-item active">
							<a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="noticias">Noticias</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blog">Blog</a>
						</li>
					</ul>
				<span class="navbar-text">
					<a class="links-redes" href="https://www.facebook.com/RockNside/"><i class="fab fa-facebook"></i></a>
					<a class="links-redes" href="https://www.instagram.com/rocknside/"><i class="fab fa-instagram"></i></a>
					<a class="links-redes" href="https://www.youtube.com/rocknside"><i class="fab fa-youtube"></i></a>
					<a class="links-redes" href="https://twitter.com/rocknside"><i class="fab fa-twitter-square"></i></a>
				</span>
				</div>
			</nav>
		</header>
		<?php wp_head(); ?>
	</head>
	<body id="RockNside" class="margen-body" style="margin-top: 80px;">
