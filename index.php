<?php 
$title = 'Home';

include './partials/header.php' ?>

<div class="flex space-between">
    <div class="content-banner-home">
        <img src="./assets/images/shape.png" class="img-banner-home"/>
    </div>
    <div class="center-all">
        <div>
            <h1 class="big">Find the festival of your DREAMS</h1>
            <p class="home">Thanks to Festifun, <strong>access an interactive map </strong> that meets all your desires! Select the elements of your choice and <strong>discover</strong> the festival that you like</p>
            <div class="mt-4">
                <span class="first-button"><a href="map">Found festival on map </a></span>
                <span class="second-button"><a href="advanced-filters">Found festival with filters </a></span>
            </div>
        </div>
    </div>
</div>

<?php include './partials/footer.php' ?>
