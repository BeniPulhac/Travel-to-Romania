<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];

$start = $_POST['cityHeaderStart'];
$end = $_POST['cityHeaderEnd'];
$tripId = $_POST['tripId'];
$count = $_POST['count'];
$count = $count - 1;


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

                unset($cities[$count]);
                $cities2 = array_values($cities);

                $cities2 = json_encode($cities2, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                $sql1 = "UPDATE trips SET city = '$cities2' WHERE id = '$tripId'";

                if ( mysqli_query($conn, $sql1)) {
                    echo json_encode(['Success' => 'Yes']);
                } else {
                    echo json_encode(['Success' => 'Error:' . mysqli_error($conn)]);
//                    var_dump("Error deleting record: " . mysqli_error($conn));
                }
            }
        }
    }
}