<?php session_start(); ?>
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
    <link rel = "stylesheet" href = "../assets/css/nav-bar2.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
    <link rel = "stylesheet" href = "../assets/css/tripComponents/wish-trip.css">
    <!--    <link rel="stylesheet" href="assets/css/bootstrap.css">-->

    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">
<!-----------------------------------Nav Bar----------------------------------------------->
<?php include 'components/navbar2.php';?>
<!----------------------------------/Nav Bar/----------------------------------------------->

<!----------------------------------Sign in | Register----------------------------------------------->
<?php include 'components/signIn.php';?>
<!----------------------------------/Sign in | Register/----------------------------------------------->
<?php
date_default_timezone_set('UTC');
$today = date('Y/m/d');
?>
<main id="testBlur">
    <header class="head bkg-color">
        <div class="px-4 pt-5 my-5 text-center border-bottom positioning-parent-custom container">
            <div class="positioning-content-header">
                <h1 class="display-4 fw-bold text-white">Plan your trip here</h1>
                <div class="mx-auto">

                    <form class="head-input" action="" method="get" id="resetTripDates">
                        <div class="head-input-value d-flex flex-md-row flex-column justify-content-evenly">
                            <div class=" d-flex justify-content-center py-1">
                                <div class="start d-flex flex-row align-items-center">
                                    <label for="tripStart" class="fw-bold green-color px-1">Trip Start: </label>
                                    <input id="tripStart" type="date" required pattern="\d{2}-\d{2}-\d{4}" name="tripStart" min="<?php echo date("Y-m-d", time()); ?>">
                                </div>
                                <span id="tripStartError" class="text-danger"></span>
                            </div>

                            <div class=" d-flex justify-content-center py-1">
                                <div class="end d-flex flex-row align-items-center">
                                    <label for="tripEnd" class="fw-bold green-color px-1">Trip End: </label>
                                    <input id="tripEnd" type="date" required pattern="\d{2}-\d{2}-\d{4}" name="tripEnd" min="<?php echo date("Y-m-d", time()); ?>">
                                </div>
                                <span id="tripEndError" class="text-danger"></span>
                            </div>

                        </div>
                        <div class="container">
                            <input type="button" class="head-submit-btn" id="tripSubmitDates" value="Submit Dates" name="submitDates">
                        </div>
                        <span id="tripSubmitDatesError" class="text-danger pt-2"></span>
                    </form>

                </div>
            </div>

            <div class="container px-5 overflow-visible positioning-child-custom">
                <img src="../assets/images/places-to-visit.jpg" class="img-fluid border rounded-3 shadow-lg mb-4 head-image" alt="Example image" width="800" height="400" loading="lazy">
            </div>

        </div>
    </header>


    <section class="about-page d-flex flex-column">
        <div class="about-page-title mx-auto padding-top w-75">
            <h2 class="text-center py-2 fw-bold">How to navigate</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet fuga ipsam iste minus possimus provident quisquam vitae. Commodi distinctio dolores est, expedita minima nesciunt praesentium repellat voluptas. Nesciunt, quisquam recusandae.</p>
        </div>
        <div class="wrap">
            <div class="about-page-content d-flex flex-wrap justify-content-between">
                <div class="info-hotel position-card">
                    <i class="about-page-icon fa-solid fa-bed fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Hotels tab</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem esse ipsa minima molestiae nemo neque quaerat quidem sit. Doloremque eligendi nihil sint temporibus! Nisi officia, provident. Accusamus, repellendus?</p>
                </div>

                <div class="info-restaurant position-card">
                    <i class="fa-solid fa-utensils fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Restaurants tab</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequatur distinctio, doloribus ducimus eum in labore laboriosam mollitia natus numquam odit officiis pariatur placeat quaerat saepe sequi sit tempore vero.</p>
                </div>

                <div class="info-attraction position-card">
                    <i class="fa-solid fa-compass fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Places to visit</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores dolorem dolores eum, facilis illum mollitia nihil nostrum nulla officia quas quibusdam quisquam sapiente sint sunt suscipit ut voluptas.</p>
                </div>
            </div>
        </div>


    </section>
</main>

<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/tripComponents/wishTrip.js"></script>
<script>
    tripStart.onchange = ()=>{
        tripEnd.setAttribute('min', tripStart.value);
        if(tripEnd.value < tripStart.value) {
            tripEnd.value = '';
        }
    };
</script>