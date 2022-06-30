<?php
require_once '../../includes/classes/placesClass.php';
include '../../dataBase.php';

$conn = $GLOBALS['conn'];

//  Hotel
$hotels = new hotels();
$resultHotel = $hotels->getHotels('hotels');


//  Restaurant
$restaurants = new restaurants();
$resultRestaurants = $restaurants->getRestaurants('restaurants');


//  Attractions
$attractions = new attractions();
$resultAttractions = $attractions->getAttractions('attractions');

