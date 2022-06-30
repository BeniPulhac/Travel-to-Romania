<?php
require_once '../classes/placesClass.php';

$q = $_POST['inputString'] ?? null;
$cityName = $_POST['cityName'] ?? null;

$attractions = new attractions();
$attractions = $attractions->getAttractions('attractions', $q, $cityName);

echo json_encode($attractions);