<?php
session_start();
include '../../includes/tripComponents/tripStartDisplayDates.backend.php';
if(isset($GLOBALS['end_date'])) {
    $endDate = $GLOBALS['end_date'];
}
$trip_id = $trip_id ?? null;
if (!isset($_SESSION['userid'])) {
    header("Location: https://l_pulhac.internship.rankingcoach.com/index.php");
}
include '../../includes/components/accountTrips.php';
$tripRow = $row ?? null;
$rowHotels = $rowHotels ?? null;
$rowRestaurants = $rowRestaurants ?? null;
$rowAttractions = $rowAttractions ?? null;
?>
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
<main id="testBlur">
    <header class="head trip-end-title bkg-color d-flex flex-column justify-content-center align-items-center">
        <div class="head-container">
            <div class="h-container-info">
                <h2 class="fw-bold text-white">A summery of your trip</h2>
            </div>
        </div>

        <div class="container text-center pt-3">
            <input type="button" class="head-submit-btn" id="tripSubmitDates" value="Go back" name="submitDates">
            <input type="hidden" id="tripEndTripId" value="<?= $trip_id ?>">
        </div>
    </header>

    <section class="about-page d-flex flex-column">
        <div class="container w-75 pt-5" id="accountTrips">

            <?php if($tripRow != null) : ?>

                <?php
                    $startTrip = strtotime($tripRow['start_date']);
                    $startTrip = date('d/m/Y', $startTrip);

                    $endTrip = strtotime($tripRow['end_date']);
                    $endTrip = date('d/m/Y', $endTrip);

                    $date1 = date_create($tripRow['start_date']);
                    $date2 = date_create($tripRow['end_date']);
                    $diff = date_diff($date1, $date2);
                    $diff = $diff->format('%d');

                    $cities = json_decode($tripRow['city']);
                    ?>
                    <div class="container pb-4">
                        <div class="container border p-1 text-center">
                            <h5>Your trip is between: <?= $startTrip . '-' . $endTrip ?></h5>
                        </div>

                        <!--                In small screen <768px i need to remove d-flex-->
                        <div class="d-flex account-days">
                            <?php
                            $currentDay = strtotime($tripRow['start_date']);
                            for ($i = 1; $i <= $diff; $i++) { ?>
                                <div class=" border day-div">
                                    <div class="day border-bottom">
                                        <span><?= 'Day: ' . $i ?></span>
                                    </div>
                                    <?php foreach ($cities as $city) : ?>
                                        <?php if($currentDay >= strtotime($city->start_date) && $currentDay <= strtotime($city->end_date)) : ?>
                                            <div class="py-1 ps-2">
                                                <span class="fw-bold">City:</span>
                                                <?= $city->name ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($rowHotels as $rowHotel) : ?>
                                        <?php if ($currentDay >= $rowHotel['start_date'] && $currentDay <= $rowHotel['end_date']) : ?>
                                            <div class="py-1 ps-2">
                                                <span class="fw-bold">Hotel:</span>
                                                <?= $rowHotel['name'] ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($rowRestaurants as $rowRestaurant) : ?>
                                        <?php if ($currentDay >= $rowRestaurant['start_date'] && $currentDay <= $rowRestaurant['end_date']) : ?>
                                            <div class="py-1 ps-2">
                                                <span class="fw-bold">Restaurant:</span>
                                                <?= $rowRestaurant['name'] ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($rowAttractions as $rowAttraction) : ?>
                                        <?php if ($currentDay >= $rowAttraction['start_date'] && $currentDay <= $rowAttraction['end_date']) : ?>
                                            <div class="py-1 ps-2">
                                                <span class="fw-bold">Place to visit:</span>
                                                <?= $rowAttraction['name'] ?>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                                <?php $currentDay += 86400; } ?>
                        </div>
                    </div>

                <?php  ?>
            <?php endif; ?>
        </div>
    </section>
</main>
<script src="../../assets/js/tripComponents/tripStart.js"></script>
<script src="../../assets/js/tripComponents/tripEnd.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>
