<?php

require_once '../../controller/FormController.php';

$controllerObj = new FormController();
$response = $controllerObj->sendEmail();


echo json_encode($response);
