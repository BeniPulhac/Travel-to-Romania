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
                <h1 class="head-title fw-bold">Plan your trip here</h1>
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


    <section class="about-page d-flex flex-column">
        <div class="about-page-title mx-auto py-5 w-75">
            <h2 class="text-center py-2 fw-bold">How to navigate</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet fuga ipsam iste minus possimus provident quisquam vitae. Commodi distinctio dolores est, expedita minima nesciunt praesentium repellat voluptas. Nesciunt, quisquam recusandae.</p>
        </div>
        <div class="wrap">
            <div class="about-page-content d-flex flex-wrap justify-content-between">
                <div class="info-hotel test">
                    <i class="about-page-icon fa-solid fa-bed fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Hotels tab</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores dolorem esse ipsa minima molestiae nemo neque quaerat quidem sit. Doloremque eligendi nihil sint temporibus! Nisi officia, provident. Accusamus, repellendus?</p>
                </div>

                <div class="info-restaurant test">
                    <i class="fa-solid fa-utensils fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Restaurants tab</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consequatur distinctio, doloribus ducimus eum in labore laboriosam mollitia natus numquam odit officiis pariatur placeat quaerat saepe sequi sit tempore vero.</p>
                </div>

                <div class="info-attraction test">
                    <i class="fa-solid fa-compass fa-2x d-flex justify-content-center pb-2"></i>
                    <h4 class="text-center">Places to visit</h4>
                    <p class="text-center prg-align">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores dolorem dolores eum, facilis illum mollitia nihil nostrum nulla officia quas quibusdam quisquam sapiente sint sunt suscipit ut voluptas.</p>
                </div>
            </div>
        </div>


    </section>
</main>


<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.js"></script>
</body>
</html>
