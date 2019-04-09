<?php include '../views/partials/header.php' ?>

<div id='map' style='width: 100%; height: 100vh; position:absolute;top:0;left:0;right:0;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoia2VyaWFucCIsImEiOiJjanIzb3RjYjQwZHBiNDlxb244bmhmMWttIn0.OOdv7-Uvd5NnModocJk0Bw';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script>

<?php include '../views/partials/footer.php' ?>