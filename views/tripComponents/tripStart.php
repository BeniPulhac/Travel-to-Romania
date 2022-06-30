<?php
session_start();
include '../../includes/tripComponents/tripStartDisplayDates.backend.php';
$trip_id = $trip_id ?? null;
if(isset($startDate)) {
    $startDate = $startDate;
}
if(isset($endDate)) {
    $endDate = $endDate;
}
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
        <div class="about-page-header pb-5">
            <div class="about-page-header d-flex justify-content-center">
                <h4 class="fw-bold">Where you want to travel?</h4>
            </div>
        </div>

        <div class="container about-page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-margin">
                        <div class="card-body">
                            <div class="row search-body">
                                <div class="col-lg-12">
                                    <div class="search-result">
                                        <div class="result-header">
                                            <div class="row">
                                                <div class="form-group col-lg-6 d-flex flex-row">
                                                    <label for="cityInput" class="my-auto">City</label>
                                                    <input type="text" id="cityInput" class="form-control mx-sm-3" onkeyup="showHint(this.value);">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container" id="insertModal">
                                            <?php include '../components/modalDate.php'; ?>

                                            <div class="result-body" id="cityPopup">
                                                <div class="row-custom row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 m-auto align-content-center">

                                                    <div class="list-group w-75 mx-auto list-custom pe-0 " id="insertCityList">
                                                        <?php include '../../includes/tripComponents/tripStartBackend.php'; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-auto border-top">
            <div class="about-page-buttons d-flex flex-row justify-content-end container pt-4">
                <button type="button" id="tripStartNext" class="btn btn-outline-success btn-lg active">Next</button>
            </div>
        </div>

    </section>
</main>

<script src="../../assets/js/tripComponents/tripAttractions.js"></script>
<script src="../../assets/js/tripComponents/tripRestaurant.js"></script>
<script src="../../assets/js/tripComponents/tripHotels.js"></script>
<script src="../../assets/js/tripComponents/tripStart.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/components/pageMove.js"></script>

</body>
</html>

