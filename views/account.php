<?php
session_start();
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
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "../assets/css/account.css">
    <script src="https://kit.fontawesome.com/03c4305000.js" crossorigin="anonymous"></script>
</head>
<body id="body-width">
<!-----------------------------------Nav Bar----------------------------------------------->
<?php include 'components/navbar2.php';?>
<!----------------------------------/Nav Bar/----------------------------------------------->

<!----------------------------------Sign in | Register----------------------------------------------->
<?php include 'components/signIn.php';?>
<!----------------------------------/Sign in | Register/----------------------------------------------->

<main id="testBlur">
    <header class="header-custom">
        <div class="head-container">
            <h1 class="text-white fw-bold">Your Account</h1>
        </div>
    </header>
    <section  class="account">
        <input type="hidden" id="sessionId" value="<?php echo $_SESSION['userid'] ?>">
        <?php include 'components/accountSubMenu.php'; ?>

<!--        <div class="container w-75">-->
<!--            <h2>Your Trips</h2>-->
<!--            <p>Click on the button to toggle between showing and hiding content.</p>-->
<!--        </div>-->

        <div class="container w-75" id="accountTrips">
            <div class="container border-bottom mb-4">
                <h2>Your Trips</h2>
                <p >Click on the button to toggle between showing and hiding content.</p>
            </div>
<!--            Insert data from Data Base-->
            <?php include 'components/modalDate.php'; ?>
        </div>

        <div class="container" id="accountSettings">

        </div>
    </section>
</main>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<!--<script src="../assets/js/tripComponents/tripStart.js"></script>-->
<script src="../assets/js/accountTrips.js"></script>
</body>
</html>

