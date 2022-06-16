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


if($q !== '' && strlen($q) >= 1) {
    $q = strtolower($q);
    $len = strlen($q);

    for ($i = 0; $i < count($cities); $i++) {

        if (stristr($q, substr($cities[$i]['citys_name'], 0, $len))) {

            if ($hint === '') {
                $hint = $cities[$i]['citys_name'];

                echo $hint;
            }
            else {
                $hint = '';
                $hint =  ", " . $cities[$i]['citys_name'];

                echo $hint;
            }
        }
    }
}
