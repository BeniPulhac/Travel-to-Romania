<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Us">
    <meta name="keywords" content="about, review, romania, travel">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel = "stylesheet" href = "../assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "../assets/css/header.css">
    <link rel = "stylesheet" href = "../assets/css/footer.css">
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

    <header  id="anchor-scroll-up" class="head pt-5">
        <div class="head-container">
            <h1 class="head-title">Contact us</h1>
            <p class="head-prg">Travel to Romania provides you with <span class="new-line">amazing diversity and breadth of choice - all in one place.</span></p>
        </div>

    </header>

<!--    <div class = "hero-img"></div>-->

    <main class="ctn">
        <div class="ctn-container">

            <div class="container">
                <?php include 'formTemporary/FormView.php'?>
            </div>

        </div>
    </main>

<!--------------------------------------------footer-------------------------------------------->
    <?php include 'components/footer.php';?>
<!--------------------------------------------/footer-------------------------------------------->
</div>
<!--<script src="../assets/js/components/contactForm.js"></script>-->
<script src="../assets/js/openCloseForms.js"></script>
<script src="../assets/js/navbar.js"></script>
<!--<script src="../assets/js/formSubmit.js"></script>-->
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/jquery.js"></script>
</body>
</html>
