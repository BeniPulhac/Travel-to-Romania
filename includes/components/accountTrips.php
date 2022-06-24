<?php

include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$userId = $_POST['userId'];

$sql = "SELECT * FROM trips WHERE userid='$userId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($row as $trip) {
        echo json_encode($trip);
    }
} else {
    echo json_encode(['Success' => 'No']);
}