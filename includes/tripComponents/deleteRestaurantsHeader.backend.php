<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$hotelId = $_POST['hotelId'];
$tripId = $_POST['tripId'];

$sql = "DELETE FROM trip_restaurants WHERE id = '$hotelId' AND trip_id = '$tripId'";
$result = mysqli_query($conn, $sql);