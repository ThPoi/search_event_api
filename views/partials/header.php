<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_logo">
                <img src="assets/images/logo.png" class="header_logo_img"/>
            </div>

            <?php  if($title==='Map'){ ?>
            <div class="header_search">
                <svg viewBox="0 0 16 16" role="presentation" aria-hidden="true" focusable="false" style="height: 18px; width: 18px; display: block; fill: currentcolor;"><path d="m2.5 7c0-2.5 2-4.5 4.5-4.5s4.5 2 4.5 4.5-2 4.5-4.5 4.5-4.5-2-4.5-4.5m13.1 6.9-2.8-2.9c.7-1.1 1.2-2.5 1.2-4 0-3.9-3.1-7-7-7s-7 3.1-7 7 3.1 7 7 7c1.5 0 2.9-.5 4-1.2l2.9 2.8c.2.3.5.4.9.4.3 0 .6-.1.8-.4.5-.5.5-1.2 0-1.7"></path></svg>
                <input placeholder="Solidays Paris" />
            </div>
            <?php } ?>
            <nav class="header_nav">
                <ul>
                    <li>
                        <?php if($title==='Map'){ ?>
                        <a href="<?= URL.'home' ?>">Retour</a>
                        <?php } else {?>
                        <a href="<?= URL.'map'?>">Map</a>
                        <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>


    </header>