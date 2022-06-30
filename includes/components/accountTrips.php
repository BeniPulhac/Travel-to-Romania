<?php
$conn = $GLOBALS['conn'];
$userId = $userId ?? null;

$sql = "SELECT * FROM trips WHERE userid='$userId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
$rowTripId = $row['id'];


$sqlHotels = "SELECT * FROM trip_hotels WHERE trip_id = '$rowTripId'";
$resultHotels = mysqli_query($conn, $sqlHotels);

if (mysqli_num_rows($resultHotels) > 0) {
    $rowHotels = mysqli_fetch_all($resultHotels, MYSQLI_ASSOC);
}

$sqlRestaurants = "SELECT * FROM trip_restaurants WHERE trip_id = '$rowTripId'";
$resultRestaurants = mysqli_query($conn, $sqlRestaurants);

if (mysqli_num_rows($resultRestaurants) > 0) {
    $rowRestaurants = mysqli_fetch_all($resultRestaurants, MYSQLI_ASSOC);
}

$sqlAttractions = "SELECT * FROM trip_attractions WHERE trip_id = '$rowTripId'";
$resultAttractions = mysqli_query($conn, $sqlAttractions);

if (mysqli_num_rows($resultAttractions) > 0) {
    $rowAttractions = mysqli_fetch_all($resultAttractions, MYSQLI_ASSOC);
}