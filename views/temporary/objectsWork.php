<?php
require_once '../../includes/classes/places.php';

//  Objects
$hotels = new places();
//
//
////  Set attribute
//4
//$hotels->customize();

////10
//$hotels->query = 'Arad';
//
//$hotels->setRatingCustom(4.5);
//
//$hotels->__set('name', 'Hotel Park');
//$hotels->__set('category', 'hotel');
//$hotels->__set('postalCode', 310315);
//$hotels->__set('reviews', 215);
//
//
//
////  Get attribute
////11
//echo $hotels->name;
//echo '<br>';
//
//echo $hotels->__get('category');
//echo '<br>';
//
//echo $hotels->getRatingCustom();
//echo '<br>';

//13
//$restaurant = new places('timisoara', 'la Minut', 'restaurant', '2005310', '3.7', '140');
//foreach ($restaurant as $value) {
//    echo $value.'<br>';
//}

//15
//$hotels->whatIsThis();

//17
//echo $hotels::numberHotels;

//19
$hotels->showCoordinates();