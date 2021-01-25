<?php

// res file destination
// json format
$fileDestination = fopen('result.json', 'w+');

// base url
$baseUrl = 'https://maps.googleapis.com/maps/api/geocode/json?latlng=';

// gmaps key api
$apiKey = "";

// your location data
// format array like this    { ["lat" => "latitude", "long" => "longitude"], ... }

$batchData = array(
  
    ["lat" => "-6.229728", "long" => "106.6894312"],
    ["lat" => "-6.2679629", "long" => "106.9365523"],
    ["lat" => "-6.2571719", "long" => "106.6834665"],

);

$data = array();

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla-whatever-ua-string');

// cacert.pem
curl_setopt($ch, CURLOPT_CAINFO, realpath('./cacert.pem'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

// save 
curl_setopt($ch, CURLOPT_FILE, $fileDestination);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

foreach ($batchData as $loc) {
    $lat = $loc['lat'];
    $long = $loc['long'];

    $url = $baseUrl . $lat . ',' . $long . '&key=' . $apiKey;

    curl_setopt($ch, CURLOPT_URL, $url);
    $curl_response = curl_exec($ch);
}

curl_close($ch);

print_r($ch);
