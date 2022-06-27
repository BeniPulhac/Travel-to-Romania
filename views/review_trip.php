<?php
session_start();
include '../dataBase.php';
$conn = $GLOBALS['conn'];
$userId = $_SESSION['userid'];

$sql = "SELECT * FROM trips WHERE userid='$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Document</title>
</head>

<body>
    <?php foreach ($row as $trip) : ?>
        <div><button onclick="toggleTripDetails(<?= $trip['id'] ?>);"><?= $trip['start_date'] . '-' . $trip['end_date'] ?></button></div>
        <div id="trip-details-<?= $trip['id'] ?>" class="d-none">
            <?php
            $cities = json_decode($trip['city']);
            ?>
            <?php foreach ($cities as $city) : ?>
                <div class="city">
                    <div class="name"><?= $city->name ?></div>
                    <div class="dates">
                        <div class="start-date"><?= $city->start_date ?></div>
                        <div class="end-date"><?= $city->end_date ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <script>
        function toggleTripDetails(tripId) {
            let tripDetailsElement = document.getElementById('trip-details-' + tripId);
            tripDetailsElement.classList.toggle('d-none');
        }
    </script>
</body>
</html>
