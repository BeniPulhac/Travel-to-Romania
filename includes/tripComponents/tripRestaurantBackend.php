<?php
require_once '../classes/placesClass.php';

$q = $_POST['inputString'] ?? null;
$cityName = $_POST['cityName'] ?? null;

$restaurants = new restaurants();
$restaurants = $restaurants->getRestaurants('restaurants', $q, $cityName);

echo json_encode($restaurants);