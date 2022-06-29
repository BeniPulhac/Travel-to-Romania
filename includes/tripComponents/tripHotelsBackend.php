<?php
require_once '../classes/placesClass.php';

$q = $_POST['inputString'] ?? null;
$cityName = $_POST['cityName'] ?? null;

$hotels = new hotels();
$hotels = $hotels->getHotels('hotels', $q, $cityName);

echo json_encode($hotels);