<?php require './inc/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    	<!-- Content SEO -->
	<meta name="subject" content="website">
	<meta name="description" content="">

  <!-- Rating level and Langage -->
	<meta name="rating" content="General">
	<meta name="language" content="fr">

	<!-- Google Bot -->
	<meta name="robots" content="index,follow">
	<meta name="googlebot" content="index,follow">
	<meta name="google" content="nositelinkssearchbox">
	<meta name="google" content="notranslate">

	<!-- Mobile Data -->
	<meta name="apple-mobile-web-app-title" content="Festifun">
	<meta name="application-name" content="Festifun">

	<!-- Twitter Card Data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@festifun">
	<meta name="twitter:title" content="Festifun">
	<meta name="twitter:description" content="">
	<meta name="twitter:creator" content="@nartydev">
	<meta name="twitter:domain" content="narty.fr/festifun/">

	<!-- Open Graph Data -->
	<meta property="og:image:type" content="image/png">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:type" content="website">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="600">
	<meta property="og:description" content="">
	<meta property="og:title"  content="Festifun - Found your event">
	<meta property="og:site_name" content="Festifun">
	<meta property="og:url" content="http://narty.fr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:400,600,700,800|PT+Sans:400,700" rel="stylesheet">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?=<?= rand(0,5000); ?>">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_logo">
                <a href="<?= BASE_URL ?>/map">
                    <img src="<?= BASE_URL ?>/assets/images/logo.svg" class="header_logo_img"/>
                </a>
            </div>
            <nav class="header_nav">
                <ul>
                    <li class="<?= active('') ?>">
                        <a href="<?= BASE_URL ?>">Home</a>
                    </li>
                    <li class="<?= active('map') ?>">
                        <a href="<?= BASE_URL ?>map">Map</a>
                    </li>
                    <li class="<?= active('advanced-filters') ?>">
                        <a href="<?= BASE_URL ?>advanced-filters">Filters</a>
                    </li>
                </ul>
            </nav>
        </div>


    </header>