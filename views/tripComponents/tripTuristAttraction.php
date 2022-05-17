<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel = "stylesheet" href = "../assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
    <link rel = "stylesheet" href = "../assets/css/wish-trip.css">
    <!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">
<!-----------------------------------Nav Bar----------------------------------------------->
<?php include 'components/navbar.php';?>
<!----------------------------------/Nav Bar----------------------------------------------->

<!----------------------------------Sign in / Register----------------------------------------------->
<?php include 'components/signIn.php';?>
<!----------------------------------Sign in / Register----------------------------------------------->
<main id="testBlur">
    <header class="head">
        <div class="head-container">
            <div class="h-container-info">
                <h1 class="head-title">Plan your trip here</h1>
                <div class="head-input d-block">
                    <div class="head-input-value d-flex flex-wrap justify-content-center">
                        <label for="triptStart">Trip Start: </label>
                        <input id="tripStart" type="date" required pattern="\d{2}-\d{2}-\d{4}">

                        <label for="tripEnd">Trip End: </label>
                        <input id="tripEnd" type="date">
                    </div>
                    <div class="head-submit">
                        <button type="button" class="head-submit-btn" id="headInputSubmit">Submit Dates</button>
                    </div>
                </div>
            </div>

        </div>

        <img src="" alt="" class="head-image">
    </header>


    <section class="aboutPage">

    </section>
</main>


<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.js"></script>
</body>
</html>