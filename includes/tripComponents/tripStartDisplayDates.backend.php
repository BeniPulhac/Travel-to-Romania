<?php
include '../../dataBase.php';
$conn = $GLOBALS['conn'];

$url = parse_url("https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
if (!empty($url['query'])) {
    parse_str($url['query'], $query_params);
    if (!empty($query_params['tripId'])) {
        $trip_id = $query_params['tripId'];
        $sql = "SELECT * FROM trips WHERE id = " . $trip_id;
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $row = mysqli_fetch_assoc($result);

            //  Format dates
            $row['start_date'] = strtotime($row['start_date']);
            $row['start_date'] = date("d-m-Y", $row['start_date']);

            $row['end_date'] = strtotime($row['end_date']);
            $row['end_date'] = date("d-m-Y", $row['end_date']);

            //  Send Globals
            $startDate = $row['start_date'];
            $endDate = $row['end_date'];
            $cities = json_decode($row['city']);

        } else {
            header('Location: https://l_pulhac.internship.rankingcoach.com');
        }
    } else {
        header('Location: https://l_pulhac.internship.rankingcoach.com');
    }
} else {
    header('Location: https://l_pulhac.internship.rankingcoach.com');
}
