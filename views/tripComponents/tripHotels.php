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
$cities = json_decode($tripRow['city']);
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

    <link rel = "stylesheet" href = "../../assets/css/tripComponents/trip-hotels.css">
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
                <h4 class="fw-bold">Where you want stay?</h4>
            </div>
        </div>

        <div class="container about-page-content">
            <div class="row">
                <div class="col-12">
                    <div class="card card-margin">
                        <div class="card-body">
                            <div class="row search-body">
                                <div class="col-lg-12">
                                    <?php foreach ($cities as $city) : ?>
<!--                                    -->
                                        <div class="accordion py-2" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <b><?= $city->name ?></b>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="search-result">
                                                            <div class="result-header">
                                                                <div class="row">
                                                                    <div class="form-group col-lg-6 d-flex flex-row">
                                                                        <label for="hotelInput" class="my-auto">Hotel</label>
                                                                        <input type="text" id="hotelInput" class="form-control mx-sm-3" onkeyup="showHintHotel(this.value)" required>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="result-actions d-flex justify-content-end">
                                                                            <div class="result-sorting">
                                                                                <span>Sort By:</span>
                                                                                <select class="form-control border-0" id="selectOptions">
                                                                                    <option value="1">Relevance</option>
                                                                                    <option value="2">Names (A-Z)</option>
                                                                                    <option value="3">Names (Z-A)</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="show-city text-center" id="txtHint">

                                                            </div>

                                                            <div class="result-body">
                                                                <div class="row-custom row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 m-auto align-content-center" id="insertHotelCard">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<!--                                    -->
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top my-auto">
            <div class="about-page-buttons d-flex flex-row justify-content-between container pt-4">
                <button  type="button" id="tripHotelsBack" class="btn btn-outline-success btn-lg active">Back</button>

                <button  type="button" id="tripHotelsNext" class="btn btn-outline-success btn-lg active">Next</button>
            </div>
        </div>

    </section>
</main>

<script src="../../assets/js/tripComponents/tripHotels.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/components/pageMove.js"></script>
</body>
</html>
