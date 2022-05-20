
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
                        <span class="text-white ps-1">"'Variable' . 'Variable'"</span>
                    </div>

                    <div class="head-input-date d-flex flex-row">
                        <span class="text-white fw-bold larger-text">City: </span>
                        <span class="text-white ps-1" id="txtHint"></span>
                    </div>

                    <div class="head-input-places">

                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="about-page d-flex flex-column py-5">
        <div class="about-page-content">
            <div class="about-page-header d-flex justify-content-center">
                <h4 class="fw-bold">Where you want to travel?</h4>
            </div>
            <div class="about-page-city d-flex flex-row container">
                <label for="cityInput" class="larger-text fw-bold">City: </label>
                <input id="cityInput" type="text" onkeyup="showHint(this.value)" required>
            </div>
        </div>
        <hr>
        <div class="about-page-buttons d-flex flex-row justify-content-between container">
            <a href="../wishTrip.php" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Back</a>

            <a href="tripHotels.php" class="btn btn-outline-success btn-lg active" role="button" aria-pressed="true">Next</a>
        </div>
    </section>
</main>

<!--<script src="../../assets/js/tripComponents/wishTrip.js"></script>-->
<script src="../../assets/js/tripComponents/tripStart.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/jquery.js"></script>
</body>
</html>

