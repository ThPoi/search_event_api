<?php

// use filter

if(!empty($_GET))
{
    $genreValue = !empty($_GET['genre']) ? $_GET['genre'] : '';
    $latValue = !empty($_GET['latitude']) ? $_GET['latitude'] : '';
    $longValue = !empty($_GET['longitude']) ? $_GET['longitude'] : '';
    $dateValue = !empty($_GET['date']) ? $_GET['date'] : '';
    $countryCode = !empty($_GET['country']) ? $_GET['country'] : '';

}

if(!empty($latValue) && !empty($longValue))
{
    $positionValue = $latValue . ',' . $longValue;
}
if(!empty($dateValue))
{
    $localeDateValue = $dateValue . 'T00:00:00';
}


$title = 'Recherche';
// $genreId = !empty($genreValue) ? $genreValue : '';



$urlFilter = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$urlFilter .= http_build_query([
    'apikey' => '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md',
    'size' => '2',
    'latlong' => !empty($positionValue) ? $positionValue : '',
    'countryCode'=> !empty($countryCode) ? $countryCode : '',
    'genreId' => !empty($genreValue) ? $genreValue : '',
    'localStartDateTime' => !empty($localeDateValue) ? $localeDateValue : '',

]);


// Make request to API
$curlFilter = curl_init();
curl_setopt($curlFilter, CURLOPT_URL, $urlFilter);
curl_setopt($curlFilter, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlFilter, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curlFilter, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curlFilter, CURLOPT_SSL_VERIFYHOST, false);


$resultFilter = curl_exec($curlFilter);
curl_close($curlFilter);
$resultFilter = json_decode($resultFilter);



