<?php
session_start();
include '../../includes/tripComponents/tripStartDisplayDates.backend.php';
if(isset($GLOBALS['end_date'])) {
    $endDate = $GLOBALS['end_date'];
}
$trip_id = $trip_id ?? null;
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
                                                    <label for="cityInput" class="my-auto">Hotel</label>
                                                    <input type="text" id="cityInput" class="form-control mx-sm-3" onkeyup="showHintHotel(this.value)" required>
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
                                                <!--                                                    Insert cards with JS-->
<!---->
<!--                                                <div class='card-custom'>-->
<!--                                                    <a href='#' class='card-custom-a'>-->
<!--                                                        <div class='card-img card-image-custom'>-->
<!--                                                            <img class='card-img-top card-image-custom' src='../../assets/images/cities-small.jpg' alt='Card image cap'>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <div class='card-body'>-->
<!--                                                            <h5 class='card-title'>Title</h5>-->
<!--                                                            <p class='card-text'>-->
<!--                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium ad alias, aliquid amet aspernatur atque culpa cum debitis dicta doloremque-->
<!--                                                            </p>-->
<!--                                                        </div>-->
<!---->
<!--                                                        <div class='card-footer'>-->
<!--                                                            <p class='card-text '>-->
<!--                                                                <small class='text-muted d-flex justify-content-between'>-->
<!--                                                                    <span><i class='fas fa-eye pe-1'></i>1000</span>-->
<!--                                                                    <span><i class='fas fa-calendar-alt pe-1'></i>Jan 20, 2018</span>-->
<!--                                                                </small>-->
<!--                                                            </p>-->
<!--                                                        </div>-->
<!--                                                    </a>-->
<!--                                                </div>-->


                                                <!--                                                -->
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


        <div class="about-page-buttons d-flex flex-row justify-content-between container">
            <a href="tripStart.php?tripId=<?= $trip_id ?>" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Back</a>

            <a href="tripRestaurants.php?tripId=<?= $trip_id ?>" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Next</a>
        </div>
    </section>
</main>

<!--<script src="../../assets/js/tripComponents/wishTrip.js"></script>-->
<script src="../../assets/js/tripComponents/tripHotels.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>
