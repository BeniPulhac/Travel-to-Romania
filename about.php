<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Us">
    <meta name="keywords" content="about, review, romania, travel">

    <title>Travel to Romania</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel = "stylesheet" href = "assets/css/about.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel = "stylesheet" href = "assets/css/nav-bar.css">
    <link rel = "stylesheet" href = "assets/css/header.css">
    <link rel = "stylesheet" href = "assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-light fixed-top position-relative">
        <div class="container-md">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top nav-bar-logo-custom">
            </a>

            <div class="navigation-custom navbar-light d-none d-md-flex">
                <ul class="nav-ul-custom nav justify-content-end">
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
                    </li>
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>
                    </li>
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="about.php">About</a>
                    </li>
                </ul>

                <div class="navigation-btn btn-group">
                    <button class="btn btn-light rounded-pill shadow-sm bg-body me-1"><a href="log-in.php" class="btn-custom">Log In</a></button>
                    <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                </div>
            </div>

            <button class="burger-menu-custom navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <button type="button" class="btn-close text-reset ms-auto p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                <div class="offcanvas-body">
                    <ul class="nav-ul-custom nav justify-content-end pb-2 d-block">
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="hotels.php">Hotels</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom" href="attractions.php">Attractions</a>
                        </li>
                        <li class="nav-item nav-item-custom ">
                            <a class="nav-link nav-link-custom active" aria-current="page" href="about.php">About</a>
                        </li>
                    </ul>

                    <div class="navigation-btn btn-group">
                        <button class="btn btn-light rounded-pill shadow-sm bg-body me-1"><a href="log-in.php" class="btn-custom">Log In</a></button>
                        <button class="btn btn-light rounded-pill shadow bg-body "><a href="log-in.php" class="btn-custom">Register</a></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header  id="anchor-scroll-up" class="head">
        <div class="head-container">
            <h1 class="head-title">Wanna learn more about us?</h1>
            <p class="head-prg">Travel to Romania provides you with <span class="new-line">amazing diversity and breadth of choice - all in one place.</span></p>
        </div>

    </header>

    <div class = "hero-img"></div>

    <main class="ctn">
        <div class="ctn-container">

            <div class="box">
                <div class="container-left">
                    <div class="about-title">
                        <h2 class="about-title-left">About us</h2>
                    </div>

                    <div class="about-prg">
                        <p class="prg-right prg-equal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi magnam qui sequi. Amet dolores excepturi expedita, minus molestias nulla perferendis quaerat, quos rerum saepe sed sint temporibus tenetur, ullam veritatis.</p>
                        <p class="prg-left prg-equal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae cupiditate debitis earum est harum id iste, odit perferendis porro provident quae ratione repudiandae, sit sunt ullam vitae? Amet, possimus.</p>
                    </div>
                </div>

                <div class="container-right">
                    <div class="review-title-container">
                        <h2 class="review-title">WE APPRECIATE YOUR REVIEW!</h2>
                        <h6 class="review-subtitle">Your review will help us to improve our web hosting quality products, and customer services.</h6>
                    </div>

                    <form class="feedback" action="">
                        <div class="title-equal">Your personal info</div>
                        <div class="group-box">
                            <input type="text" class="prs-info" name="name" placeholder="Your Name">
                            <input type="email" class="prs-info" name="email" placeholder="Email">
                        </div>

                        <div class="title-equal">Rate our overall services</div>
                        <div class="rate-box">
                            <input class="rate-input" type="number" min="1" max="5" placeholder="1-5">
                        </div>

                        <div class="title-equal">Write your feedback</div>
                        <div class="write-box">
                            <textarea class="write-area" id="review" rows="3"></textarea>
                        </div>

                        <button type="submit" class="feedback-btn">Submit</button>
                    </form>
                </div>
            </div>

            <div class="others-review">

            </div>

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
<script src="assets/js/main.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.js"></script>
</body>
</html>
