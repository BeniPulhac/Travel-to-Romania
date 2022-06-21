<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$cityDateFirst = $_POST['cityDateFirst'];
$cityDateLast = $_POST['cityDateLast'];
$cityPopupTitle = $_POST['cityPopupTitle'];


$new_city = new stdClass();
$new_city -> name = $cityPopupTitle;
$new_city -> start_date = $cityDateFirst;
$new_city -> end_date = $cityDateLast;


switch ([$cityDateFirst, $cityDateLast]) {
    case $cityDateFirst == '' && $cityDateLast == '':
        echo json_encode(['tripDay' => '*Please select a day/days for the visit']);
        break;

    default:
        $new_city = json_encode($new_city);
        $sql = "SELECT city FROM trips WHERE status = 0";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);

        if($count == 1) {
            //if we have row we need to check if we have data in city column

            if($row['city'] == NULL) {
                $sql1 = "UPDATE trips SET city = '$new_city' WHERE status = 0";
                $result1 = mysqli_query($conn, $sql1);
            }

        } else {
            //error
        }
}



