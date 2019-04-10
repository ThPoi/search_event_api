<?php 
$title = 'Map';
include './partials/header.php';

$url = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$url .= http_build_query([
    'apikey' => '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md',
    'size' => '200',
]);

// Make request to API
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$result = curl_exec($curl);
curl_close($curl);

$result = json_decode($result);

?>

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

function changeCursor(el, marker) {
    if(marker.classifications[0].segment.name == 'Sports') {
        el.style.backgroundImage = "url(http://localhost:8888/search_event_api/assets/images/pointer-red.svg)";
    } else if(marker.classifications[0].segment.name == 'Music') {
        el.style.backgroundImage = "url(http://localhost:8888/search_event_api/assets/images/pointer-green.svg)";
    } else if(marker.classifications[0].segment.name == 'Arts & Theatre') {
        el.style.backgroundImage = "url(http://localhost:8888/search_event_api/assets/images/pointer-blue.svg)";
    } else {
        el.style.backgroundImage = "url(http://localhost:8888/search_event_api/assets/images/pointer-yellow.svg)";
    }
}
 
// add markers to map
geojson._embedded.events.forEach(function(marker) {
// create a DOM element for the marker
var el = document.createElement('div');
el.className = 'marker';
changeCursor(el, marker)

el.style.width = 25+"px"
el.style.height = 33+"px"

el.addEventListener('click', function() {

});

// add marker to map
new mapboxgl.Marker(el)
.setLngLat([marker._embedded.venues[0].location.longitude, marker._embedded.venues[0].location.latitude])
.setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
    .setHTML('<h3>' + marker.name + '</h3>'))
.addTo(map);

});
</script>



<?php include './partials/footer.php' ?>
