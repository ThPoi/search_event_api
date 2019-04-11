<?php require './inc/core.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
                    <li class="active">
                        <a href="<?= BASE_URL ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>map">Map</a>
                    </li>
                    <li>
                        <a href="<?= BASE_URL ?>advanced-filters">Filters</a>
                    </li>
                </ul>
            </nav>
        </div>


    </header>