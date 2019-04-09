<?php include '../views/partials/header.php' ?>

<div id='map' style='width: 100%; height: 100vh; position:absolute;top:0;left:0;right:0;'></div>
<?php 
$result = json_encode($result);

?>

<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoia2VyaWFucCIsImEiOiJjanIzb3RjYjQwZHBiNDlxb244bmhmMWttIn0.OOdv7-Uvd5NnModocJk0Bw';
var geojson = <?php echo $result; ?>;
console.log(geojson)
 
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-65.017, -16.457],
zoom: 5
});
 
// add markers to map
geojson._embedded.events.forEach(function(marker) {
// create a DOM element for the marker
var el = document.createElement('div');
el.className = 'marker';
el.style.backgroundImage = "url(http://localhost:8888/search_event_api/public/assets/images/marker.svg)";
el.style.width = 50+"px"
el.style.height = 50+"px"

el.addEventListener('click', function() {
    window.alert('test');
});

// add marker to map
new mapboxgl.Marker(el)
.setLngLat([marker._embedded.venues[0].location.longitude, marker._embedded.venues[0].location.latitude])
.addTo(map);

console.log(map)
});
</script>



<?php include '../views/partials/footer.php' ?>