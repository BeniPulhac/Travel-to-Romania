<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];

//  Query
$sql = "SELECT start_date, end_date FROM trips WHERE status = 0";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if($count == 1) {
    $row = mysqli_fetch_assoc($result);

//  Format dates
    $row['start_date'] = strtotime($row['start_date']);
    $row['start_date'] = date("d-m-Y", $row['start_date']);

    $row['end_date'] = strtotime($row['end_date']);
    $row['end_date'] = date("d-m-Y", $row['end_date']);

//  Send Globals
    $GLOBALS['start_date'] = $row['start_date'];
    $GLOBALS['end_date'] = $row['end_date'];
} else {
    $GLOBALS['start_date'] = "Error: There's more than 1 trip opened for editing";
}

