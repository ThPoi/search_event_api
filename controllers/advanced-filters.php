<?php

// use filter

if(!empty($_GET))
{
    $genreValue = !empty($_GET['genre']) ? $_GET['genre'] : '';
    $latValue = !empty($_GET['latitude']) ? $_GET['latitude'] : '';
    $longValue = !empty($_GET['longitude']) ? $_GET['longitude'] : '';
    $dateValue = !empty($_GET['date']) ? $_GET['date'] : '';
    $countryValue = !empty($_GET['cou   ntry']) ? $_GET['country'] : '';
    $familyValue = !empty($_GET['family']) ? $_GET['family'] : '';
    $pageValue = !empty($_GET['page']) ? $_GET['page'] : '';
    $keywordValue = !empty($_GET['keyword']) ? $_GET['keyword'] : '';

}


if(!empty($latValue) && !empty($longValue))
{
    $positionValue = $latValue . ',' . $longValue;
}
if(!empty($dateValue))
{
    $localeDateValue = $dateValue . 'T00:00:00';
}
if($genreValue === 'all')
{
    $genreValue = '';
}

$title = 'Recherche';
// $genreId = !empty($genreValue) ? $genreValue : '';



function shapeSpace_remove_var($url, $key) {
	$url = preg_replace('/(.*)(?|&)'. $key .'=[^&]+?(&)(.*)/i', '$1$2$4', $url .'&');
	$url = substr($url, 0, -1);
	return ($url);
}

function shapeSpace_add_var($url, $key, $value) {
	
	$url = preg_replace('/(.*)(?|&)'. $key .'=[^&]+?(&)(.*)/i', '$1$2$4', $url .'&');
	$url = substr($url, 0, -1);
	
	if (strpos($url, '?') === false) {
		return ($url .'?'. $key .'='. $value);
	} else {
		return ($url .'&'. $key .'='. $value);
	}
}

$urlFilter = 'https://app.ticketmaster.com/discovery/v2/events.json?';
$urlFilter .= http_build_query([
    'apikey' => '3gDxxU8POu1umcTRMNSF4AGqgtUzc2md',
    'size' => '19',
    'keyword' => !empty($keywordValue) ? $keywordValue : '',
    'page' => !empty($pageValue) ? $pageValue : '1',
    'latlong' => !empty($positionValue) ? $positionValue : '',
    'countryCode'=> !empty($countryValue) ? $countryValue : '',
    'genreId' => !empty($genreValue) ? $genreValue : '',
    'localStartDateTime' => !empty($localeDateValue) ? $localeDateValue : '',
    'includeFamily' => !empty($familyValue) ? $familyValue : '',

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



