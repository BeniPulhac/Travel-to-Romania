<?php
include '../../dataBase.php';

//  Variables
$conn = $GLOBALS['conn'];
$q = $_REQUEST['q'];

//  Response
$cities = [
    'city' => '',
    'dateStart' => '',
    'dateEnd' => ''
];

//  Query
$sql = "SELECT citys_name FROM cities";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);


//  Free result from memory and Close connection
mysqli_free_result($result);
$conn->close();


//  Error handling
if($q !== '' && strlen($q) >= 1) {
    $q = strtolower($q);
    $length = strlen($q);

    foreach ($row as $item) {
        if(stristr($q, substr($item['citys_name'], 0, $length))) {
            if($cities['city'] === '') {
                $cities['city'] = $item['citys_name'];
            } else {
                $cities['city'] .= ", " . $item['citys_name'];
            }
        }
    }
}


echo json_encode($cities);