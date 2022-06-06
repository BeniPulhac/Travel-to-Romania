<?php

require_once '../../controller/FormController.php';

$controllerObj = new FormController();
$response = $controllerObj->sendEmail();

//if($response['formCheck']['check'] === true) {
//    $controllerObj->displayEmail();
//} else {
//    echo json_encode($response);
//}

echo json_encode($response);
