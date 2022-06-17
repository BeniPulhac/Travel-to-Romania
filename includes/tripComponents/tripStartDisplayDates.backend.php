<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];
$url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$urlComponents = parse_url($url);
if(!empty($urlComponents['query'])) {
    parse_str($urlComponents['query'], $params);
}

$sql = "SELECT start_date, end_date FROM trips WHERE id=" . $params['project_id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$row['start_date'] = strtotime($row['start_date']);
$row['start_date'] = date("d-m-Y", $row['start_date']);

$row['end_date'] = strtotime($row['end_date']);
$row['end_date'] = date("d-m-Y", $row['end_date']);

$GLOBALS['project_id'] = $row;
