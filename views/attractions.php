<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Visit Romania">
    <meta name="keywords" content="visit, romania, hotels, landscape, restaurants, activities">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "../assets/css/attractions.css">
    <link rel = "stylesheet" href = "../assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/general.css">
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
<div id="testBlur">

    <header class="head pt-5" id="anchor-scroll-up">
        <div class="head-container">
            <h1 class="head-title">See the Beautiful Romania!</h1>
            <hr>
            <p class="head-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur esse maiores minima nam necessitatibus, officiis perferendis perspiciatis quaerat similique temporibus! Asperiores autem nemo nihil nobis sit. Consequatur itaque numquam reprehenderit?</p>
        </div>
    </header>

    <main class="ctn">
        <section class="ctn-container">

            <div class="container-right container-equal">
                <div class="container-right-text">
                    <p class="container-title">Cities</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolorum enim est illo, in incidunt laudantium magni perspiciatis quae, quam quasi ratione rem reprehenderit sapiente, soluta unde ut? Similique?</p>
                </div>
                <img src="../assets/images/cities-small.jpg" alt="cities" class="container-img">
            </div>

            <div class="container-left container-equal">
                <div class="container-left-text">
                    <p class="container-title">Restaurants</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem culpa dolor esse incidunt pariatur sunt tempora tempore voluptatibus? Alias doloremque fuga fugiat incidunt ipsam minus perferendis recusandae rem tenetur!</p>
                </div>
                <img src="../assets/images/restaurants-small.jpg" alt="restaurants" class="container-img">
            </div>

            <div class="container-right container-equal">
                <div class="container-right-text">
                    <p class="container-title">Landscapes</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis cumque dolorum enim est illo, in incidunt laudantium magni perspiciatis quae, quam quasi ratione rem reprehenderit sapiente, soluta unde ut? Similique?</p>
                </div>
                <img src="../assets/images/landscapes-small.jpg" alt="landscapes" class="container-img">
            </div>

            <div class="container-left container-equal">
                <div class="container-left-text">
                    <p class="container-title">Places to Visit</p>
                    <p class="container-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem culpa dolor esse incidunt pariatur sunt tempora tempore voluptatibus? Alias doloremque fuga fugiat incidunt ipsam minus perferendis recusandae rem tenetur!</p>
                </div>
                <img src="../assets/images/places-to-visit-small.jpg" alt="visit" class="container-img">
            </div>

        </section>
    </main>

<!--------------------------------------------footer-------------------------------------------->
    <?php include 'components/footer.php';?>
<!--------------------------------------------/footer-------------------------------------------->
</div>

<script src="../assets/js/main.js"></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>

</body>
</html>
