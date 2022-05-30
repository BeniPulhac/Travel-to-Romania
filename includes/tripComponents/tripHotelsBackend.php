<?php
include '../classes/placesClass.php';
$q = $_REQUEST['q'];
//var_dump($q);
$hotels = new hotels();
$hotels = $hotels->getHotels('hotels', $q);

//var_dump($hotels);

echo json_encode($hotels);