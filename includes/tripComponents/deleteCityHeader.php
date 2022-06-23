<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];

$start = $_POST['cityHeaderStart'];
$end = $_POST['cityHeaderEnd'];
$tripId = $_POST['tripId'];

$sql = "SELECT city FROM trips WHERE id= '$tripId'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    foreach ($row as $cities) {
        $cities = json_decode($cities);

        foreach ($cities as $city) {
            $startDate = date("d", strtotime($city->start_date));
            $endDate = date("d", strtotime($city->end_date));

            if($startDate == $start && $endDate == $end) {
//                $city = json_encode($city);

                $sql1 = "DELETE FROM trips WHERE id='$tripId' AND city='$city->start_date'";
//Broken query - doesnt work

                if ( mysqli_query($conn, $sql1)) {
                    var_dump("Record deleted successfully");
                } else {
                    var_dump("Error deleting record: " . mysqli_error($conn));
                }
            }
        }
    }
}