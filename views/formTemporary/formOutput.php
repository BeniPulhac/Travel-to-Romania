<?php

require_once '../../controller/FormController.php';

$controllerObj = new FormController();
$response = $controllerObj->sendEmail();

if($response['formCheck'] === true) {
    $controllerObj->displayEmail();
} else {
    echo json_encode($response);
}
