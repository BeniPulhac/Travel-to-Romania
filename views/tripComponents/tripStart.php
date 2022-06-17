<?php
session_start();
include '../../includes/tripComponents/tripStartDisplayDates.backend.php';
$row = $GLOBALS['project_id'];
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
    <header class="head">
        <div class="head-container">
            <div class="h-container-info py-5">
                <h1 class="text-white fw-bold">Your Trip</h1>
                <div class="head-input">
                    <div class="head-input-date d-flex flex-row">
                        <span class="text-white fw-bold larger-text">Trip between: </span>
                        <span class="text-white ps-2 align-self-center"><?php echo $row['start_date'] ?> / <?php echo $row['end_date'] ?></span>
                    </div>

                    <div class="d-flex align-content-start flex-wrap">
                        <div class="p-2 text-white btn btn-dark btn-outline-success border-5 element-custom">
                            <i class="fa-solid fa-city"></i>
                            <span>City:</span>
                            <span>Output Here</span>
                        </div>

                    </div>

                    <div class="head-input-places">

                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="about-page d-flex flex-column py-5">
        <div class="about-page-header pb-5">
            <div class="about-page-header d-flex justify-content-center">
                <h4 class="fw-bold">Where you want to travel?</h4>
            </div>
        </div>


<!--        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">-->
<!--            Launch static backdrop modal-->
<!--        </button>-->
<!---->
<!---->
<!--        <div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">-->
<!--            <div class="modal-dialog">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>-->
<!--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        ...-->
<!--                    </div>-->
<!--                    <div class="modal-footer">-->
<!--                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--                        <button type="button" class="btn btn-primary">Understood</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->


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
                                                    <input type="text" id="cityInput" class="form-control mx-sm-3" onkeyup="showHint(this.value)" required>
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

                                        <div class="result-body" id="cityPopup">
                                            <div class="row-custom row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 m-auto align-content-center">
                                                <!--                                                    Insert cards with JS-->
                                                <div class="list-group w-75 mx-auto list-custom pe-0 overflow-auto" id="insertCityList">
<!--                                                    --><?php //include '../../includes/tripComponents/tripStartBackend.php'; ?>
                                                </div>

                                                <div >

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

<div class="about-page-footer">
    <div class="about-page-buttons d-flex flex-row justify-content-between container">
        <a href="../wishTrip.php" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Back</a>

        <a href="tripHotels.php" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Next</a>
    </div>
</div>

    </section>
</main>

<!--<script src="../../assets/js/tripComponents/wishTrip.js"></script>-->
<script src="../../assets/js/tripComponents/tripStart.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>

