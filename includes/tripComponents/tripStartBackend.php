<?php
////  Work with objects???maybe
//include '../classes/placesClass.php';
//
//$q = $_REQUEST['q'];
//$hint = '';
//$cities = new cities();
//echo $cities->getCity('test');
//
//var_dump($cities->getCity('test'));
//
//
//












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
                $hint = $hint[$i] . ", " . $cities[$i]['citys_name'];

                echo $hint;
            }
        }
    }
}
//else {
//    for ($i = 0; $i < count($cities); $i++) {
//
//        $hint = $cities[$i]['citys_name'];
//        if(!empty($hint)) {
//
////            echo '<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 list-content" aria-current="true">
////                    <div class="d-flex gap-2 w-100 justify-content-between ">
////                         <div>
////                            <h6 class="mb-0">'. $hint .'</h6>
////                         </div>
////                      </div>
////                     </a>';
//        }
//    }
//}




//echo '<a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3 list-content" aria-current="true">
//                                                        <div class="d-flex gap-2 w-100 justify-content-between ">
//                                                            <div>
//                                                                <h6 class="mb-0">List group item heading</h6>
//                                                                <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
//                                                            </div>
//<!--                                                            <small class="opacity-50 text-nowrap">now</small>-->
//                                                        </div>
////                                                    </a>';



