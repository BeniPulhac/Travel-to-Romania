<?php
include '../../dataBase.php';
//  Get the parameter from URL
$q = $_REQUEST['q'];

//  Variables
$conn = $GLOBALS['conn'];
$cities = array();
$hint = '';

//  Query
$sql = "SELECT citys_name FROM cities";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);


//  Free result from memory and Close connection
mysqli_free_result($result);
$conn->close();


if($q !== '' && strlen($q) >= 1) {
    $q = strtolower($q);
    $len = strlen($q);

    for ($i = 0; $i < count($row); $i++) {

        if (stristr($q, substr($row[$i]['citys_name'], 0, $len))) {

            if ($hint === '') {
                $hint = $row[$i]['citys_name'];

                echo $hint;
            }
            else {
                $hint = '';
                $hint =  ", " . $row[$i]['citys_name'];

                echo $hint;
            }
        }
    }
}
