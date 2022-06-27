<?php

include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$tripId = $_POST['tripId'];
$cityIndex = $_POST['cityIndex'];
$cityDate = $_POST['cityDate'];

$sql = "SELECT * FROM trips WHERE id='$tripId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($row);
} else {
    echo json_encode(['Success' => 'No']);
}
