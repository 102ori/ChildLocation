<?php
$latitude = $_GET['lat'];
$longitude = $_GET['lon'];

// Sanitize the input to avoid any security issues
$latitude = filter_var($latitude, FILTER_SANITIZE_STRING);
$longitude = filter_var($longitude, FILTER_SANITIZE_STRING);

// Process the location data (e.g., save to a file)
file_put_contents('locations.txt', "Lat: $latitude, Lon: $longitude\n", FILE_APPEND);
echo "Location received";
?>
