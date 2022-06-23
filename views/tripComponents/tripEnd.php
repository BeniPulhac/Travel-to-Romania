<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/tripComponents/trip-end.css">
    <link rel="stylesheet" href="../../assets/css/general.css">

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">
<!-----------------------------------Nav Bar----------------------------------------------->
<?php include '../components/navbar2.php';?>
<!----------------------------------/Nav Bar/----------------------------------------------->

<!----------------------------------Sign in | Register----------------------------------------------->
<?php include '../components/signIn.php';?>
<!----------------------------------/Sign in | Register/----------------------------------------------->
<?php
date_default_timezone_set('UTC');
$timeStart = 1653011947;
$timeEnd = 1653695947;

$timeBetween = $timeEnd - $timeStart;
$day = 60 * 60 * 24;
$timeBetween = floor($timeBetween / (60 * 60 * 24));

$date = time();
$date = date('d F - D', $date);

$start = date("d F - D", $timeStart);

?>
<main id="testBlur">
    <?php include 'tripHeader.php';?>

    <section class="about-page d-flex flex-column">
        <div class="container">
            <div class="info-title">
                <h4 class="ps-5">General info about the trip</h4>

                <div class="info-title-content d-flex flex-column">
                    <div class="title-day d-flex flex-row">
                        <span class="fw-bold">Date of the trip: </span>
                        <span class="ms-2">output from db</span>
                    </div>

                    <div class="title-km">
                        <span class="fw-bold">Km traveled: </span>
                        <span>Output from db</span>
                    </div>
                </div>
            </div>

            <div class="info-data">
<!--                We insert here with js by days the trip-->
                <div class="info-data-content">
                    <div class="info-data-title pt-5 pb-2">
                        <span><?php
                            $counter = 1;
                            for($i = $timeStart; $i < $timeEnd; $i += $day) {
                                $thisDate = date('d F - D', $i);
                                displayHtml($counter, $thisDate);
                                    $counter += 1;
                            }

                            function displayHtml($counter, $thisDate) {
                                echo "<br>";
                                echo "<h2>Day: $counter - $thisDate</h2>";
                                echo '<div class="info-data-body">
                                    <div class="info-data-city">
                                        <span class="fw-bold">City: </span>
                                        <span>Output from db</span>
                                    </div>
            
                                    <div class="info-data-hotel">
                                        <span class="fw-bold">Hotel: </span>
                                        <span>output from db</span>
                                    </div>
            
                                    <div class="info-data-restaurant">
                                        <div class="restaurant-name">
                                            <span class="fw-bold">Restaurant: </span>
                                            <span>output from db</span>
                                        </div>
            
                                        <div class="restaurant-time">
                                            <span class="fw-bold">Time of visit: </span>
                                            <span>output from db</span>
                                        </div>
                                    </div>
            
                                    <div class="info-data-place">
                                        <div class="place-name">
                                            <span class="fw-bold">Place of visit: </span>
                                            <span>output from db</span>
                                        </div>
            
                                        <div class="place-time">
                                            <span class="fw-bold">Time of visit: </span>
                                            <span>output from db</span>
                                        </div>
                                    </div>
                                </div>';
                            }
                        ?></span>
                    </div>

<!--                    <div class="info-data-body">-->
<!--                        <div class="info-data-city">-->
<!--                            <span class="fw-bold">City: </span>-->
<!--                            <span>Output from db</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="info-data-hotel">-->
<!--                            <span class="fw-bold">Hotel: </span>-->
<!--                            <span>output from db</span>-->
<!--                        </div>-->
<!---->
<!--                        <div class="info-data-restaurant">-->
<!--                            <div class="restaurant-name">-->
<!--                                <span class="fw-bold">Restaurant: </span>-->
<!--                                <span>output from db</span>-->
<!--                            </div>-->
<!---->
<!--                            <div class="restaurant-time">-->
<!--                                <span class="fw-bold">Time of visit: </span>-->
<!--                                <span>output from db</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="info-data-place">-->
<!--                            <div class="place-name">-->
<!--                                <span class="fw-bold">Place of visit: </span>-->
<!--                                <span>output from db</span>-->
<!--                            </div>-->
<!---->
<!--                            <div class="place-time">-->
<!--                                <span class="fw-bold">Time of visit: </span>-->
<!--                                <span>output from db</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>
    </section>
</main>

<!--<script src="../../assets/js/tripComponents/wishTrip.js"></script>-->
<!--<script src="../../assets/js/tripComponents/tripEnd.js"></script>-->
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>
