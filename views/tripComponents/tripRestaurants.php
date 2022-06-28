<?php
session_start();
include '../../includes/tripComponents/tripStartDisplayDates.backend.php';
$trip_id = $trip_id ?? null;
if (!isset($_SESSION['userid'])) {
    header("Location: https://l_pulhac.internship.rankingcoach.com/index.php");
}
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

    <link rel = "stylesheet" href = "../../assets/css/tripComponents/trip-start.css">
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
    <?php include 'tripHeader.php';?>


    <section class="about-page d-flex flex-column py-5">
<!--        <div class="about-page-content">-->
<!--            <div class="about-page-header d-flex justify-content-center pb-4">-->
<!--                <h4 class="fw-bold">Where you want to eat?</h4>-->
<!--            </div>-->
<!--            <div class="about-page-city container d-flex flex-row pb-5">-->
<!--                <label for="hotelInput" class="larger-text fw-bold pe-2">Restaurant: </label>-->
<!--                <input id="hotelInput" type="text" required>-->
<!--            </div>-->
<!--            <div class="about-page-city container d-flex flex-row pb-5">-->
<!--                <label for="hotelInput" class="larger-text fw-bold pe-2">What time: </label>-->
<!--                <input id="hotelInput" type="time" required>-->
<!--            </div>-->
<!--            <div class="about-page-city container d-flex flex-row align-items-center">-->
<!--                <span class="larger-text fw-bold">You want to eat somewhere else in this city?: </span>-->
<!---->
<!--                <div class="optionInput ps-3">-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">-->
<!---->
<!--                        <label class="form-check-label" for="flexRadioDefault1">Yes</label>-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>-->
<!--                        <label class="form-check-label" for="flexRadioDefault2">No</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <hr>
        <div class="about-page-buttons d-flex flex-row justify-content-between container">
            <a href="tripHotels.php?tripId=<?= $trip_id ?>" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Back</a>

            <a href="tripTouristAttraction.php?tripId=<?= $trip_id ?>" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Next</a>
        </div>
    </section>
</main>

<!--<script src="../../assets/js/tripComponents/wishTrip.js"></script>-->
<!--<script src="../../assets/js/tripComponents/tripEnd.js"></script>-->
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>
