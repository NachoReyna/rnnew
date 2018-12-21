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
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#">Navbar w/ text</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
					</ul>
				<span class="navbar-text">
				Navbar text with an inline element
				</span>
				</div>
			</nav>
		</header>
		<?php wp_head(); ?>
	</head>
	<body id="RockNside">
