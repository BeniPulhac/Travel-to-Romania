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
        $sql = "SELECT start_date, end_date FROM trips WHERE userid=" . $userid;
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count >= 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                $row['start_date'] = strtotime($row['start_date']);
                $row['end_date'] = strtotime($row['end_date']);

                if(($tripStart >= $row['start_date']) && ($tripStart <= $row['end_date'])) {
                    $errors['tripCheck'] = '*Cant creat this trip';
                    echo json_encode($errors);
                    break;
                } else {
                    $tripStart = date("Y:m:d", $tripStart);
                    $tripEnd = date("Y:m:d", $tripEnd);

                    $sql1 = "INSERT INTO trips (userid, start_date, end_date)
            VALUES ('$userid', '$tripStart', '$tripEnd')";
                    $result1 = mysqli_query($conn, $sql1);

                    if($result1) {
                        echo json_encode('Success');
                    } else {
                        echo json_encode("Error: " . $sql1 . "<br>" . mysqli_error($conn));
                    }
                }
            }
        }
}
mysqli_close($conn);