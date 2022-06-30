<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$tripId = $_POST['tripId'];
$cityName = $_POST['cityName'];
$hotelName = $_POST['hotelName'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

$startDate = strtotime($startDate);
$endDate = strtotime($endDate);

$sql = "INSERT INTO trip_attractions (trip_id, city, name, start_date, end_date)
    VALUES ('$tripId', '$cityName', '$hotelName', '$startDate', '$endDate')";
$result = mysqli_query($conn, $sql);