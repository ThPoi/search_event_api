<?php 
$title = 'Map';
include './partials/header.php';
?>

<div id="map" class="map"></div>
<div class="content-right">
    <div class="content-category">
        <div>
            <div class="round-color blue">
                <img src="./assets/images/marker-white.svg" class="svg-white"/>
            </div>
            <div class="title-category">Pop</div>
        </div>
        <div>
            <div class="round-color green">
                <img src="./assets/images/marker-white.svg" class="svg-white"/>
            </div>
            <div class="title-category">Rock</div>
        </div>
        <div>
            <div class="round-color red">
                <img src="./assets/images/marker-white.svg" class="svg-white"/>
            </div>
            <div class="title-category">Hip-hop</div>
        </div>
        <div>
            <div class="round-color yellow">
                <img src="./assets/images/marker-white.svg" class="svg-white"/>
            </div>
            <div class="title-category">Autres</div>
        </div>
    </div>
    </div>
</div>
<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.0.0/mapbox-gl-geocoder.min.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.0.0/mapbox-gl-geocoder.css' type='text/css' />
<script>

let rockButton = document.querySelector('.green')
let hipButton = document.querySelector('.red')
let otherButton = document.querySelector('.yellow')
let popButton = document.querySelector('.blue')

rockButton.addEventListener('click', () => {
    let allRockMarker = [... document.querySelectorAll('.rock')]
    for(let rock of allRockMarker) {
        rock.classList.toggle('hidden')
    }
})

hipButton.addEventListener('click', () => {
    let allHipHopMarker = [... document.querySelectorAll('.hip-hop')]
    for(let hip of allHipHopMarker) {
        hip.classList.toggle('hidden')
    }
})

otherButton.addEventListener('click', () => {
    let allOtherMarker = [... document.querySelectorAll('.other')]
    for(let rock of allOtherMarker) {
        rock.classList.toggle('hidden')
    }
})

popButton.addEventListener('click', () => {
    let allPopMarker = [... document.querySelectorAll('.pop')]
    for(let pop of allPopMarker) {
        pop.classList.toggle('hidden')
    }
})

let url = './cache/447b43082983808e916259d8c3c1c214'

let geojson = null

fetch(url)
  .then((resp) => resp.json()) // Transform the data into json
  .then(function(data) {
    geojson = data
    geojson._embedded.events.forEach(function(marker) {
        
        // create a DOM element for the marker
        var el = document.createElement('div');
        el.className = 'marker';
        changeCursor(el, marker)
        console.log(marker.classifications[0].genre.name)
        el.style.width = 25+"px"
        el.style.height = 33+"px"

        // add marker to map
        new mapboxgl.Marker(el)
            .setLngLat([marker._embedded.venues[0].location.longitude, marker._embedded.venues[0].location.latitude])
            .setPopup(new mapboxgl.Popup({ offset: 25 }) // add popups
                .setHTML(`<div class="title-box"> ${marker.name} </div> <div class="card_checkout mt-2"><a href='./event?id=${marker.id}'>En savoir plus</a></div>`))
            .addTo(map);
    });
})

mapboxgl.accessToken = 'pk.eyJ1Ijoia2VyaWFucCIsImEiOiJjanIzb3RjYjQwZHBiNDlxb244bmhmMWttIn0.OOdv7-Uvd5NnModocJk0Bw';
 
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [2.333333, 48.866667],
zoom: 5
});

function changeCursor(el, marker) {
    if(marker.classifications[0].genre.name == 'Hip-Hop/Rap') {
        el.setAttribute('class', 'hip-hop');
        el.style.backgroundImage = "url(./assets/images/pointer-red.svg)";
    } else if(marker.classifications[0].genre.name == 'Rock') {
        el.setAttribute('class', 'rock');
        el.style.backgroundImage = "url(./assets/images/pointer-green.svg)";
    } else if(marker.classifications[0].genre.name == 'Pop') {
        el.setAttribute('class', 'pop');
        el.style.backgroundImage = "url(./assets/images/pointer-blue.svg)";
    } else {
        el.setAttribute('class', 'other');
        el.style.backgroundImage = "url(./assets/images/pointer-yellow.svg)";
    }
}

// Add geolocate control to the map.
map.addControl(new mapboxgl.GeolocateControl({
    positionOptions: {
    enableHighAccuracy: true
    },
    trackUserLocation: true
}));

map.addControl(new MapboxGeocoder({
    accessToken: mapboxgl.accessToken,
    mapboxgl: mapboxgl
}));


</script>



<?php include './partials/footer.php' ?>
