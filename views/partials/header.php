<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="<?= URL ?>assets/style.css">
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="<?= URL ?>">Home</a>
            </li>
            <li>
                <a href="<?= URL ?>about-us">About</a>
            </li>
            <li>
                <a href="<?= URL ?>map">map</a>
            </li>
        </ul>
    </header>