<?php

// use filter

if(!empty($_GET))
{
    $categorieValue = $_GET['categorie'];

}     


$title = 'Home';

$urlFilter = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$urlFilter .= http_build_query([
    'apikey' => '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md',
    'size' => '20',
    'countryCode' => 'US',
    'segmentName' => !empty($categorieValue) ? $categorieValue : '',
    'latlong' => !empty($selectValue) ? $selectValue : '',


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



