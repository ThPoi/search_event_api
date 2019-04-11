<?php

define('BASE_URL', 'http://localhost:8888/search_event_api/');
define('API_TICKETMASTER', '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md');
define('API_GOOGLE', 'AIzaSyB5pRajp7ueuLle1uM4SDLGSLfaKrinVTY');

$url = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$url .= http_build_query([
    'apikey' => API_TICKETMASTER,
    'size' => '200',
    'segmentName' => 'Musics',
]);

// Create cache info
$cacheKey = md5($url);
$cachePath = './cache/'.$cacheKey;
$cacheUsed = false;

// Cache available
if(file_exists($cachePath) && time() - filemtime($cachePath) < 50)
{
    $result = file_get_contents($cachePath);
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

    $result = curl_exec($curl);
    curl_close($curl);

    // Save in cache
    file_put_contents($cachePath, $result);
}

// Decode JSON
$result = json_decode($result);
