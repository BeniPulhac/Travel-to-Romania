<?php
session_start();
include '../../dataBase.php';
//  Variables
$conn = $GLOBALS['conn'];
$tripStart = $_POST['tripStart'];
$tripStart = strtotime($tripStart);
$tripEnd = $_POST['tripEnd'];
$tripEnd = strtotime($tripEnd);
$userid = $_SESSION['userid'];

//  Array
$dates = [$tripStart, $tripEnd];
$errors = [
    'tripStart' => '',
    'tripEnd' => '',
    'tripCheck' => ''
];

//  Error handling
switch ($dates) {
    case $tripStart == '' && $tripEnd == '' :
        $errors['tripStart'] = '*Trip start is required';
        $errors['tripEnd'] = '*Trip end is required';
        echo json_encode($errors);
        break;
    case $tripStart == '' && $tripEnd !== '':
        $errors['tripStart'] = '*Trip start is required';
        echo json_encode($errors);
        break;
    case $tripStart !== '' && $tripEnd == '':
        $errors['tripEnd'] = '*Trip end is required';
        echo json_encode($errors);
        break;
    case $tripEnd < $tripStart :
        $errors['tripEnd'] = '*End date cant be before the start date';
        echo json_encode($errors);
        break;

    default :
        $success = false;
        $sql = "SELECT start_date, end_date FROM trips WHERE userid=" . $userid;
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >= 1) {
             $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

             foreach ($row as $item) {
                 $item['start_date'] = strtotime($item['start_date']);
                 $item['end_date'] = strtotime($item['end_date']);

                 if(($tripStart >= $item['start_date'] && $tripStart <= $item['end_date']) && ($tripEnd >= $item['start_date'] && $tripEnd <= $item['end_date'])) {
                     $errors['tripCheck'] = '*Cant creat this trip';
                 }
             }

            $tripStart = date("Y:m:d", $tripStart);
            $tripEnd = date("Y:m:d", $tripEnd);

        if($errors['tripCheck'] == '') {

            $sql1 = "INSERT INTO trips (userid, start_date, end_date) VALUES ('$userid', '$tripStart', '$tripEnd')";
            $result1 = mysqli_query($conn, $sql1);
            $success = true;

            if(!$result1) {

                echo json_encode("Error: " . $sql1 . "<br>" . mysqli_error($conn));
            }
        }}

        if($success === true) {
            echo json_encode('Success');
        } else {
            echo json_encode($errors);
        }
}

mysqli_close($conn);