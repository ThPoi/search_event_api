<?php 
$title = "Events";
include './partials/header.php';

require('controllers/event.php');

if(empty($_GET['id'])) {
    header('Location: ../index');
}

foreach ($result->_embedded->events as $event) {
    if($event->id == $_GET['id']) {
        $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?';
        $url .= http_build_query([
            'key' => 'AIzaSyB5pRajp7ueuLle1uM4SDLGSLfaKrinVTY',
            'location' => $event->_embedded->venues[0]->location->latitude.",".$event->_embedded->venues[0]->location->longitude,
            'radius' => 10000,
        ]);

        // Create cache info
        $cacheKey = md5($url);
        $cachePath = './cache/'.$cacheKey;
        $cacheUsed = false;

        // Cache available
        if(file_exists($cachePath) && time() - filemtime($cachePath) < 60)
        {
            $place = file_get_contents($cachePath);
            $cacheUsed = true;
        }

        // Cache not available
        else
        {
            // Make request to API
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

            $place = curl_exec($curl);
            curl_close($curl);

            // Save in cache
            file_put_contents($cachePath, $place);
        }

        // Decode JSON
        $place = json_decode($place);
        
        ?>
            <div class="banner">
                <img src="<?= $event->images[5]->url ?>" alt="" class="img-banner"/>
                <div class="content-speed-desc">
                    <div class="content-name-event">
                        <?= $event->name ?>
                    </div>
                    <div class="content-place-event">
                        <h3>Place</h3>
                        <?= isset($event->_embedded->venues[0]->city->name) != null ? $event->_embedded->venues[0]->city->name : '' ?>
                        <?= isset($event->_embedded->venues[0]->postalCode) != null ? $event->_embedded->venues[0]->postalCode : '' ?>
                        <?= isset($event->_embedded->venues[0]->address->line1) != null ? ', '.$event->_embedded->venues[0]->address->line1 : '' ?>
                    </div>
                    <div class="content-date-event">
                        <h3>Date</h3>
                        <?= $event->dates->start->localDate ?>
                        <?= isset($event->dates->start->localTime) == null ? '' : ', '.$event->dates->start->localTime   ?>
                    </div>
                    <div class="content-genre-event">
                        <div>
                            <h3>Genre</h3>
                            <div class="tab-categorie"><?= $event->classifications[0]->segment->name ?></div>
                            <div class="tab-categorie"><?= $event->classifications[0]->genre->name ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray">
            <div class="container flex">                
                <div class="content-information">
                    <?php if(isset($event->priceRanges[0]->min)) { ?>
                    <div class="box">
                        <div class="title-box">Price ranges</div>
                        Min: <?= $event->priceRanges[0]->min ?>
                        Max: <?= $event->priceRanges[0]->max ?>
                    </div>
                    <?php } ?>
                    <?php if(isset($event->_embedded->venues[0]->images[0]->url)) { ?>
                        <div class="box">
                            <div class="title-box">Place</div>
                            <img src="<?= $event->_embedded->venues[0]->images[0]->url ?>" class="img-responsive"/>
                        </div>
                        <?php } ?>
                </div>
            </div>
            <?php if(isset($event->seatmap->staticUrl)) { ?>
            <div class="container">
                <div class="content-img">
                    <img src="<?= $event->seatmap->staticUrl ?>" class="img-responsive" />
                </div>
            </div>
            <?php } ?>
            <div class="container">
                <div class="long-box">
                    <div class="title-box">About artist</div>
                    <p><?= isset($event->_embedded->attractions[0]->name) == null ? '' : $event->_embedded->attractions[0]->name   ?></p>
                    <div class="title-box">Externals links</div>
                    <div class="social-network">
                        <?= isset($event->_embedded->attractions[0]->externalLinks->youtube) == null ? '' : '<div> <a href="'.$event->_embedded->attractions[0]->externalLinks->youtube[0]->url.'"> Youtube </a></div>'   ?>
                        <?= isset($event->_embedded->attractions[0]->externalLinks->twitter) == null ? '' : '<div> <a href="'.$event->_embedded->attractions[0]->externalLinks->twitter[0]->url.'"> Twitter </a></div>'   ?>
                        <?= isset($event->_embedded->attractions[0]->externalLinks->facebook) == null ? '' : '<div> <a href="'.$event->_embedded->attractions[0]->externalLinks->facebook[0]->url.'"> Facebook </a></div>'   ?>
                        <?= isset($event->_embedded->attractions[0]->externalLinks->wiki) == null ? '' : '<div> <a href="'.$event->_embedded->attractions[0]->externalLinks->wiki[0]->url.'"> Wikipédia </a></div>'   ?>
                        <?= isset($event->_embedded->attractions[0]->externalLinks->homepage) == null ? '' : '<div> <a href="'.$event->_embedded->attractions[0]->externalLinks->homepage[0]->url.'"> Official website </a></div>'   ?>
                    </div>
                </div>
            </div>
            <div class="container flex">
                <?php if(isset($event->info)) { ?>
                        <div class="long-box">
                            <div class="title-box">Informations</div>
                            <p><?= isset($event->info) == null ? '' : $event->info   ?></p>
                            <div class="title-box">Please note</div>
                            <p><?= isset($event->pleaseNote) == null ? '' : $event->pleaseNote   ?></p>
                        </div>
                <?php } ?>
            </div>
            <div class="container">
            <div class="flex wrap">

            <?php foreach($place->results as $oneplace) { ?>
                        <div class="box auto">
                            <div class="title-box"><?= $oneplace->name ?></div>
                        </div>
            <?php } ?>
            </div>
            </div>
                <?php 
                    echo '<pre>';
                    print_r($event);
                    echo '</pre>';
                ?>
            </div>
        <?php
    } 
}

//echo $result->images[5]->url;
?>



<?php include './partials/footer.php' ?>