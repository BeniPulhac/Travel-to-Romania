<?php
include '../../dataBase.php';
//  Get the parameter from URL
$q = $_REQUEST['q'];

//  Variables
$conn = $GLOBALS['conn'];
$cities = array();
$hint = '';

//  Write query
$sql = "SELECT citys_name FROM cities";

//  Make query & get result
$result = mysqli_query($conn, $sql);

//  Fetch the resulting rows as an array
$cities = mysqli_fetch_all($result, MYSQLI_ASSOC);

//  Free result from memory
mysqli_free_result($result);

//  Close Connection
$conn->close();

if($q !== '' && strlen($q) >= 3) {
    $q = strtolower($q);
//    $q = utf8_encode($q);
    $len = strlen($q);

    for ($i = 0; $i < count($cities); $i++) {
        if (stristr($q, substr($cities[$i]['citys_name'], 0, $len))) {
            if ($hint === '') {
//                var_dump($cities[$i]['citys_name']);die;
                echo $hint = $cities[$i]['citys_name'];

            }
            else {
               echo $hint .= ", " . $cities[$i]['citys_name'];

            }
        }
    }
}



//
//$sql = "SELECT citys_name FROM cities WHERE name LIKE '%$q%'";
//$select = mysqli_query($conn, $sql);
////var_dump($sql);die;
//if(!$select) {
//    die('Could not fetch data').mysqli_connect_errno();
//}
//while($fetch = mysqli_fetch_array($select)) {
////    var_dump($select);die;
//    $cities = $select;
//}
//
////  Look all hints from DB if $q is different from ''
//if($q !== '') {
//    foreach ($cities as $city) {
////        var_dump($city);die;
//        if($hint === '') {
//            $hint = $city;
//        } else {
//            $hint .= ', $city';
//        }
//    }
//}
//
////Output 'no suggestion' if no hint was found or output correct values
//echo $hint === '' ? 'no suggestion' : $hint;
//
