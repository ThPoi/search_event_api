<?php include '../views/partials/header.php' ?>

<h1>Page <?= $id ?></h1>

<?php
if ($id == 1){?>

<!-- rendering of the API -->

<form action="#" method="get">
            <input type="text" name="city" placeholder="Paris" required value="<?= $city ?>">
            <input type="submit">
        </form>

        <!-- Result -->
        <h1>Météo pour <?= $city ?></h1>

        <?php if($result->cod !== 200): ?>

            City not found

        <?php else: ?>

            <?= $cacheUsed ? '[from cache]<br>' : '' ?>

            <img src="<?= $staticMapUrl ?>" width="150" height="150">

            <h3>Weather</h3>

            <?php foreach($result->weather as $_weather): ?>
                <div><?= $_weather->description ?></div>
            <?php endforeach; ?>

            <h3>Temperature</h3>
            <div>Min: <?= $result->main->temp_min ?>°</div>
            <div>Max: <?= $result->main->temp_max ?>°</div>
            <div>Current: <?= $result->main->temp ?>°</div>

        <?php endif ?>


<?php 
}


include '../views/partials/footer.php' 
?>