<?php 

$title = 'Map';

$url = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$url .= http_build_query([
    'apikey' => '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md',
    'size' => '200' 
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
// Create static map URL


include '../views/pages/map.php'; ?>