<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$cityDateFirst = $_POST['cityDateFirst'];
$cityDateLast = $_POST['cityDateLast'];
$cityPopupTitle = $_POST['cityPopupTitle'];
$tripId = $_POST['tripId'];
$nr = 0;


$cities = [];
$new_city = new stdClass();
$new_city -> name = $cityPopupTitle;
$new_city -> start_date = $cityDateFirst;
$new_city -> end_date = $cityDateLast;


switch ([$cityDateFirst, $cityDateLast]) {
    case $cityDateFirst == '' && $cityDateLast == '':
        echo json_encode(['tripDay' => '*Please select a day/days for the visit']);
        break;

    default:
        $sql = "SELECT city FROM trips WHERE id = '$tripId'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        while($row = mysqli_fetch_object($result)) {

            if ($count == 1) {
                if (empty($row->city)) {
                    $cities[] = $new_city;
                    $cities = json_encode($cities, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                    $sql1 = "UPDATE trips SET city = '$cities' WHERE id = '$tripId'";
                    $result1 = mysqli_query($conn, $sql1);

                    echo json_encode(['Success'=>'Yes']);
                } else {
                    $cityArray = json_decode($row->city);
                    foreach ($cityArray as $existingCity) {

                        if(($new_city->start_date >= $existingCity->start_date && $new_city->start_date < $existingCity->end_date) ||
                            ($new_city->end_date > $existingCity->start_date && $new_city->end_date <= $existingCity->end_date)) {
                            echo json_encode(['Success' => 'No']);
                            return;
                        }
                    }

                    $cities = json_decode($row->city);
                    $cities[] = $new_city;
                    $cities = json_encode($cities, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
                    $sql1 = "UPDATE trips SET city = '$cities' WHERE id = '$tripId'";
                    $result1 = mysqli_query($conn, $sql1);

                    echo json_encode(['Success'=>'Yes']);
                }

            } else {
                //error
            }
        }
}



