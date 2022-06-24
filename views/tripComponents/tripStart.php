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
                                                    <input type="text" id="cityInput" class="form-control mx-sm-3" onkeyup="showHint(this.value);" >
                                                </div>

                                                <div class="col-lg-6">
<!--                                                    <div class="result-actions d-flex justify-content-end">-->
<!--                                                        <div class="result-sorting">-->
<!--                                                            <span>Sort By:</span>-->
<!--                                                            <select class="form-control border-0" id="selectOptions">-->
<!--                                                                <option value="1">Relevance</option>-->
<!--                                                                <option value="2">Names (A-Z)</option>-->
<!--                                                                <option value="3">Names (Z-A)</option>-->
<!--                                                            </select>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="container" id="insertModal">
                                            <div class="modal fade modal-dialog modal-dialog-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="cityPopupTitle"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body d-flex flex-column align-items-center align-self-center text-center">
                                                            <form method="post" class="">
                                                                <input type="hidden" name="cityStartDate" id="cityStartDate" value="<?php echo $startDate; ?>">
                                                                <input type="hidden" name="cityEndDate" id="cityEndDate" value="<?php echo $endDate; ?>">
                                                                <label for="cityDate" class="fw-bold pe-2">First day in this city</label>
                                                                <input type="date" id="cityDateFirst" name="cityDateFirst" class="my-1">
                                                                <label for="cityDate" class="fw-bold pe-2">Last day in this city</label>
                                                                <input type="date" id="cityDateLast" name="cityDateLast" class="my-1">
                                                            </form>
                                                            <span id="modalBodyErrors" class="text-danger"></span>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-outline-success border-3" id="modalFooterOk">Understood</button>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="result-body" id="cityPopup">
                                            <div class="row-custom row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4 m-auto align-content-center">

                                                <div class="list-group w-75 mx-auto list-custom pe-0 " id="insertCityList">
                                                    <!--                                                    --><?php //include '../../includes/tripComponents/tripStartBackend.php'; ?>
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
            <div class="about-page-buttons d-flex flex-row justify-content-end container">
<!--                <a href="../wishTrip.php?tripId=--><?php //= $trip_id ?? null ?><!--" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Back</a>-->

                <a href="tripHotels.php?tripId=<?= $trip_id ?>" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Next</a>
            </div>
        </div>

    </section>
</main>

<script src="../../assets/js/tripComponents/tripStart.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>

