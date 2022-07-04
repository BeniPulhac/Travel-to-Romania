<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$trip_id = $trip_id ?? null;

$sql = "SELECT * FROM trip_hotels WHERE trip_id = '$trip_id' ORDER BY start_date";
$result = mysqli_query($conn, $sql);
$rowHotel = mysqli_fetch_all($result, MYSQLI_ASSOC);


