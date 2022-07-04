<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$trip_id = $trip_id ?? null;

$sql = "SELECT * FROM trip_attractions WHERE trip_id = '$trip_id' ORDER BY start_date";
$result = mysqli_query($conn, $sql);
$rowAttractions = mysqli_fetch_all($result, MYSQLI_ASSOC);
