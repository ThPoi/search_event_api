<?php 
$title = "Events";
include './partials/header.php';

require('controllers/event.php');

if(empty($_GET['id'])) {
    header('Location: ../index');
}


foreach ($result->_embedded->events as $event) {
    if($event->id == $_GET['id']) {
        ?>
            <div class="banner">
                <img src="<?= $event->images[5]->url ?>" alt="" class="img-banner"/>
                <div class="content-speed-desc">
                    <div class="content-name-event">
                        <?= $event->name ?>
                    </div>
                    <div class="content-place-event">
                        <h3>Place</h3>
                        <?= $event->_embedded->venues[0]->postalCode ?>, 
                        <?= $event->_embedded->venues[0]->city->name ?>,
                        <?= $event->_embedded->venues[0]->address->line1 ?>
                    </div>
                    <div class="content-date-event">
                        <h3>Date</h3>
                        <?= $event->dates->start->localDate ?>, 
                        <?= $event->dates->start->localTime  ?>
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
        <?php
    } 
}

//echo $result->images[5]->url;
?>



<?php include './partials/footer.php' ?>