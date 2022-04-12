<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hotels in Romania">
    <meta name="keywords" content="hotel, romania, booking, check in">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/hotels.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
</head>
<body>
    <nav class="navigation">
        <div class="navigation-container">
            <a href="index.php">
                <img src="assets/images/logo.png" class="navigation-logo" alt="Logo">
            </a>

            <img src="assets/images/hamburger-btn.png" alt="Open Menu" class="navigation-menu">

            <ul class="navigation-ul">
                <li class="navigation-li"><a class="navigation-a active" href="hotels.php">Hotels</a></li>
                <li class="navigation-li"><a class="navigation-a" href="attractions.php">Attractions</a></li>
                <li class="navigation-li"><a class="navigation-a" href="about.php">About</a></li>
                <li class="navigation-li"><button class="navigation-button"><a href="log-in.php" class="navigation-log-in">Log In</a></button></li>
            </ul>
            <img src="assets/images/close-menu.png" alt="Close Menu" class="navigation-close">
        </div>
    </nav>

    <div class = "hero-img"></div>

    <header class="head" id="anchor-scroll-up">
        <div class="head-container">
            <h1 class="head-title">Are you looking for a Hotel?</h1>
            <hr>
        </div>
    </header>

    <main class="ctn">
        <div class="ctn-container">
<!--            -->
            <div class="search-bar">
                <div class="search-nav">

                        <div class="search-check-in search-equal"><span>Check In</span></div>

                        <div class="search-check-out search-equal"><span>Check Out</span></div>

                        <div class="search-guest search-equal"><span>Guests</span></div>

                </div>

                <div class="search-btn">
                    <div class="testing">
                        <span>Search</span>
                    </div>
                </div>
            </div>

<!--            <div class="ctn-search-results">-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="ctn-top-picks">-->
<!---->
<!--            </div>-->
        </div>
    </main>


    <footer class="bottom">
        <div class="bottom-container">
            <div class="bottom-left bottom-center">
                <span>Travel to Romania is a webside designe to help people navigate easier through places to visit, hotels to stay in and all kind of activities to do all around Romania</span>
            </div>

            <div class="bottom-middle bottom-center">
                <button class="bottom-scroll" id="scrollUp" type="button"><a href="#anchor-scroll-up" class="bottom-scroll-modifier">Scroll Up</a></button>
                <span class="bottom-copyright">© 2022 Travel to Romania</span>
            </div>

            <div class="bottom-right bottom-center">
                <ul class="bottom-ul">
                    <li class="bottom-link"><a class="bottom-link-modifier" href="index.php">Home</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="hotels.php">Hotels</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="attractions.php">Attractions</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="contact.php">Contact</a></li>
                    <li class="bottom-link"><a class="bottom-link-modifier" href="about.php">About</a></li>
                </ul>
            </div>
        </div>
    </footer>

<script src = "assets/js/main.js"></script>
</body>
</html>
